from fastapi import FastAPI
from pydantic import BaseModel
from services.predict import predict

app = FastAPI()

class Mahasiswa(BaseModel):
    ipk: float
    kehadiran: int
    uts: int
    uas: int

@app.post("/predict")
def predict_kelulusan(data: Mahasiswa):
    hasil = predict(data.dict())
    return {"prediction": hasil}