from pydantic import BaseModel, Field


class Id(BaseModel):
    id: int

    class Config:
        orm_mode = True


class Kurso(BaseModel):
    kodo: str = Field(max_length=2, min_length=1)
    nomo: str = Field(min_length=1)

    class Config:
        orm_mode = True
