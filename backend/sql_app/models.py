from sqlalchemy import Column, Integer, String

from .database import Base


class Kurso(Base):
    __tablename__ = "kursoj"

    id = Column(Integer, primary_key=True, index=True)
    kodo = Column(String)
    nomo = Column(String)
