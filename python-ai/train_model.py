import joblib
import numpy as np
import os
from sklearn.linear_model import LogisticRegression

# Data dummy
X = np.array([
    [3.9, 95, 90, 92],
    [3.2, 80, 78, 75],
    [2.4, 60, 55, 58],
    [2.0, 50, 45, 48]
])

# 1 = LULUS, 0 = TIDAK LULUS
y = [1, 1, 0, 0]

model = LogisticRegression()
model.fit(X, y)

os.makedirs("model", exist_ok=True)
joblib.dump(model, "model/model.pkl")

print("✅ model.pkl berhasil dibuat")
