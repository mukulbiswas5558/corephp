list1 = ["a", "b" , "c"]
list2 = ["name", "pin" , "id"]
dict = {}
for i, j in zip(list1, list2):

    dict[i] = j


print(dict)