import joblib

model = joblib.load("model/model.pkl")

def predict(data):
    features = [[
        data["ipk"],
        data["kehadiran"],
        data["uts"],
        data["uas"]
    ]]
    result = model.predict(features)
    return "LULUS" if result[0] == 1 else "TIDAK LULUS"