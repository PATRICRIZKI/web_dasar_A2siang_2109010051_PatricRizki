def selection_sort(items):
    """Sorts of a list items into ascending order using the 
    selection sort algorithm
    """

    for step in range(len(items)):
        # Find the location of the smallest element in items[step:].
        location_of_smallest = step
        for location in range(step,len(items)):
            if items[location] < items[location_of_smallest]:
                location_of_smallest = location

        #exchange items [steps] with items [location_of_smallest]
        items[step], items[location_of_smallest] = items[location_of_smallest], items[step]
items = [1,3,12,91,21,20,5,90,20]
selection_sort(items)
print(items)
