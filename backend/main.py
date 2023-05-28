from enum import Enum

from fastapi import Depends, FastAPI, HTTPException
from sql_app import crud, schemas
from sql_app.database import SessionLocal
from sqlalchemy.orm import Session

app = FastAPI()


class Tags(Enum):
    kursoj = "kursoj"


def akiri_db():
    db = SessionLocal()
    try:
        yield db
    finally:
        db.close()


@app.post("/kursoj/", response_model=schemas.Id, tags=[Tags.kursoj])
def krei_kurso(kurso: schemas.Kurso, db: Session = Depends(akiri_db)):
    if crud.akiri_kurso(db, kurso.kodo):
        raise HTTPException(400, "Kurso jam registrita")
    return crud.krei_kurso(db, kurso)


@app.get("/kursoj/{kodo}", response_model=schemas.Kurso, tags=[Tags.kursoj])
def akiri_kurso(kodo: str, db: Session = Depends(akiri_db)):
    db_kurso = crud.akiri_kurso(db, kodo)
    if not db_kurso:
        raise HTTPException(400, "Nekonata kurso")
    return db_kurso


@app.get("/kursoj/", response_model=list[schemas.Kurso], tags=[Tags.kursoj])
def akiri_kursoj(db: Session = Depends(akiri_db)):
    return crud.akiri_kursoj(db)


@app.put("/kursoj/{kodo}", tags=[Tags.kursoj])
def gxisdatigi_kurso(kodo: str, kurso: schemas.Kurso, db: Session = Depends(akiri_db)):
    if not crud.akiri_kurso(db, kodo):
        raise HTTPException(400, "Nekonata kurso")
    if kurso.kodo != kodo and crud.akiri_kurso(db, kurso.kodo):
        raise HTTPException(400, "Kurso jam registrita")
    crud.gxisdatigi_kurso(db, kodo, kurso)


@app.delete("/kursoj/{kodo}", tags=[Tags.kursoj])
def forigi_kurso(kodo: str, db: Session = Depends(akiri_db)):
    if not crud.akiri_kurso(db, kodo):
        raise HTTPException(400, "Nekonata kurso")
    crud.forigi_kurso(db, kodo)
