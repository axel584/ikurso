import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn import metrics
import seaborn as sn

df = pd.read_csv(r'randomForest.csv',sep=';')

print(df)
X = df[['P1', 'P2','P3','P4','P5','P6','P7']]
y = df['S1']

# Then, apply train_test_split. For example, you can set the test size to 0.25, and therefore the model testing will be based on 25% of the dataset, while the model training will be based on 75% of the dataset:
X_train,X_test,y_train,y_test = train_test_split(X,y,test_size=0.25,random_state=0)

# Apply the Random Forest as follows:
clf = RandomForestClassifier(n_estimators=100)
clf.fit(X_train,y_train)
y_pred=clf.predict(X_test)

# Next, add this code to get the Confusion Matrix:
confusion_matrix = pd.crosstab(y_test, y_pred, rownames=['Actual'], colnames=['Predicted'])
sn.heatmap(confusion_matrix, annot=True)
print('Accuracy: ',metrics.accuracy_score(y_test, y_pred))

print (X_test) #test dataset (without the actual outcome)
print (y_pred) #predicted values

featureImportances = pd.Series(clf.feature_importances_).sort_values(ascending=False)
print(featureImportances)