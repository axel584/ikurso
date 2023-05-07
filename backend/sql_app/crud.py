from sqlalchemy.orm import Session

from . import models, schemas


def akiri_kurso(db: Session, kodo: str):
    return db.query(models.Kurso).filter(models.Kurso.kodo == kodo).first()


def akiri_kursoj(db: Session):
    return db.query(models.Kurso).all()


def forigi_kurso(db: Session, kodo: str):
    db.query(models.Kurso).filter(models.Kurso.kodo == kodo).delete()
    db.commit()


def gxisdatigi_kurso(db: Session, kodo: str, kurso: schemas.Kurso):
    db_kurso = db.query(models.Kurso).filter(models.Kurso.kodo == kodo).one_or_none()
    if db_kurso:
        for key, value in vars(kurso).items():
            setattr(db_kurso, key, value)
        db.commit()


def krei_kurso(db: Session, kurso: schemas.Kurso):
    db_kurso = models.Kurso(**kurso.dict())
    db.add(db_kurso)
    db.commit()
    db.refresh(db_kurso)
    return db_kurso
