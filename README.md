selftrack
=========

### Self-tracking Application

#### Object Oriented Hierarchy


     +--------------------+     +---------------------+     +----------------------+
     | entry              |     | item                |     | category             |
     |--------------------|     |---------------------|     |----------------------|
     | DateTime           |     | Item Name           |     | Category Name        |
     | Item Name          |     | Item Category       |     | addCategory()        |
     | Amount/Qty.        |     | editItem()          |     | viewCategory()       |
     | Geolocation        |     | deleteItem()        |     | editCategory()       |
     | addEntry()         |     | findItem()          |     | deleteCategory()     |
     | editEntry()        |     | viewItem()          |     |                      |
     | deleteEntry()      |     | viewItems()         |     |                      |
     | re-addEntry()      |     | addCategory()       |     |                      |
     | viewEntry()        |     |                     |     |                      |
     |                    |     |                     |     |                      |
     |                    |     |                     |     |                      |
     |                    |     |                     |     |                      |
     +--------------------+     +---------------------+     +----------------------+


#### Enter Emotion

       +------------------+        +------------------+
       |                  |        |                  |
       |     emo.php      |+-----> |  setEmotion.php  |
       |                  |        |                  |
       +------------------+        +------------------+
                                      |
                                      |
                                      |
                                      |
                                      +--+ include getLastEmotion.php
- - -

#### Diagram Source

http://www.asciiflow.com/#Draw5469151037633263036/347643
