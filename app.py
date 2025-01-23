from flask import Flask, render_template
import pandas as pd
from sklearn.ensemble import RandomForestRegressor
from sklearn.metrics import r2_score, mean_squared_error
from sklearn.model_selection import train_test_split
from flask import Flask, render_template
from flask_cors import CORS
import pandas as pd
from sklearn.ensemble import RandomForestRegressor
from sklearn.metrics import r2_score, mean_squared_error
from sklearn.model_selection import train_test_split

app = Flask(__name__)
CORS(app)  # Enable CORS for all routes

# Load the synthetic dataset
data = pd.read_csv("D:\EPICS\ml\Training_dataset.csv")
Actual = 88.437864

# Split the data into features (X) and target variable (y)
X = data[['Temperature', 'pH', 'Turbidity']]
y = data['Weight']

# Split the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=43)

# Initialize the Random Forest Regressor model
model = RandomForestRegressor(n_estimators=100, random_state=43)

# Train the model
model.fit(X_train, y_train)

# Make predictions on the test data
y_pred = model.predict(X_test)

# Evaluate the model
r2 = r2_score(y_test, y_pred)
mse = mean_squared_error(y_test, y_pred)

# Create a static test input
static_test_input = pd.DataFrame({'Temperature': [23.74540119], 'pH': [6.370265858], 'Turbidity': [12.61705684]})

# Predict the weight based on the static test input
predicted_weight = model.predict(static_test_input)

@app.route('/')
def index():
    # Render the HTML template with the results
    return render_template('index.html', r2=r2, mse=mse, predicted_weight=predicted_weight[0], actual_weight=Actual)

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000, debug=True)
