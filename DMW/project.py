import pandas as pd
import numpy as np
import matplotlib.pyplot as plt

df = pd.read_csv('C:/Users/Latikesh/Downloads/Project/usercuisine.csv')
df2 = pd.read_csv('C:/Users/Latikesh/Downloads/Project/rating_final.csv')

#removal of duplicates
df.drop_duplicates()
df2.drop_duplicates()

#handle missing values
df.dropna()
df2.dropna()

#merge two data
df3 = pd.merge(left=df, right=df2, on="userID", how="outer")

#Excel file for Rcuisine and its corresponding Rating
rating_group = df3.groupby("Rcuisine")
df4 = rating_group["food_rating"].mean()
df4.to_excel("C:/Users/Latikesh/Downloads/Project/cuisine_food.xlsx")

#Ratings graph
df2.groupby(['rating']).size().plot(kind='pie', autopct='%1.0f%%', title='RATINGS')
plt.show() 
df2.groupby(['food_rating']).size().plot(kind='pie', autopct='%1.0f%%', title='FOOD RATINGS')
plt.show() 
df2.groupby(['service_rating']).size().plot(kind='pie', autopct='%1.0f%%', title='SERVICE RATINGS')
plt.show() 

#top 5 cuisines
df4.nlargest(5, "first").to_excel("C:/Users/Latikesh/Downloads/Project/Top5 cuisines.xlsx")

#apriori algorithm
df5 = pd.read_csv('C:/Users/Latikesh/Downloads/Project/usercuisine2.csv')
df5.drop_duplicates()
df5.dropna()
df5['Cuisine'].str.split(',', expand = True).to_csv("C:/Users/Latikesh/Downloads/Project/apriori.csv")

from apyori import apriori
import mlxtend

dataset = pd.read_csv('C:/Users/Latikesh/Downloads/Project/apriori.csv', header=None)  
transactions=[]  
for i in range(0, 138):  
    transactions.append([str(dataset.values[i,j])  for j in range(0,102)])  

rules= apriori(transactions = transactions, min_support = 0.025, min_confidence = 0.7, min_lift = 4) 
results= list(rules)  

for item in results:  
    pair = item[0]   
    items = [x for x in pair]  
    print(items[0] + " -> " + items[1])  