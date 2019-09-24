# Online Tutorials

***Site Link :*** <http://onlinetutorials.ezyro.com/>

***Created by:***
* Kasturi Sharma
* Mallika Sinha
* Pawan Kumar
* Sushant Maji

## Table of Content
  1. Introduction
      1. Concepts of Online Tutorial
      2. Advantages of Online Tutorial
  2. Objectives
  3. Software and hardware Specification
  4. Functional Specification
  5. System Analysis
      1. ER-Diagram
  6. Database Table
  7. User Manual
  8. References
  
  
  
  ## 1. Introduction
  #### 1. Concepts of Online Tutorial
  Our project name is "Online Tutorial" which will provide free access of videos to all the students studying from class 1 to class 10. Education is a shared responsibility between us all: governments, schools, teachers, parents and private actors and must not be made too much commercialized. The government of every country should invest more money in the education since they are the pillar of the nation and can help for more sustainable development of the country. According to UNESCO about 264 million children don't go to school. Our small effort can help children to learn things online by e-learning process. So as our demo project we want to develop the online tutorial for school in free of cost.
  #### 2. Advantages of Online Tutorial
  There are mainly two advantages of our project:
  1. We can watch videos anytime anywhere provided there is an internet connection.
  2. It is free of cost.
 
 
  ## 2. Objectives
  The main objective of our project is that tutor can sign up , upload the videos , edit  the videos. Student can sign up and view the videos and after login continue watching the videos. Admin can verify the videos and delete the videos. Basically our project has three main modules:
  * Tutor Module
  * Student Module
  * Admin Module
  
  ### Tutor Module:
  * To become a tutor,  he/she needs to fill up the ‘Become a tutor’ form.
  
  ![become a tutor](https://user-images.githubusercontent.com/34769756/65538979-255b4300-df26-11e9-9341-dd15a94000e9.JPG)
  
  * Then he/she will be able to upload the videos
  
  ![upload](https://user-images.githubusercontent.com/34769756/65539196-900c7e80-df26-11e9-9189-d83d319a15f7.JPG)
  
  * The tutor can add/update/delete the videos from teacher dashboard.
  
  ![tutor](https://user-images.githubusercontent.com/34769756/65539286-c2b67700-df26-11e9-9b51-3366ef43f481.JPG)
  
  
  ### Student Module:
  * To watch the videos students need to sign up
  
  ![signup](https://user-images.githubusercontent.com/34769756/65539693-92230d00-df27-11e9-9829-2fcbb0b8a6cb.jpg)
  
  * After that according to the class wise student can select the subjects from subject list.
  
  ![subjectlist](https://user-images.githubusercontent.com/34769756/65539919-f9d95800-df27-11e9-8351-6876f9ae8308.JPG)
  
  * Student will click on the subject and can watch the video
  
  ![videopage](https://user-images.githubusercontent.com/34769756/65540048-42911100-df28-11e9-8c94-29570367bacb.JPG)
  
  * Also there is discussion forum where student can comment once they login to discussion forum.
  
  ![comment](https://user-images.githubusercontent.com/34769756/65540139-6ce2ce80-df28-11e9-9a60-84db334e00ad.JPG)
  
  
  
  ## 3. Software and Hardware Requirement Specification
  A technical stack is a combination of software products and programming languages used to create a web or mobile application. Applications have two software components: Client-side and Server-side, also known as front-end and back-end respectively.
  
  #### Server Side(Backend Side technical stack)
  The back-end contains the business logic that work behind the scenes to drive our application.
  * For backend following tools were used:
      * Programming Language: PHP
      * Database: MySQL
      * Web Server: Apache
      * Operating System: Windows 10
      * Ram: 4GB
      * Hard Disk: 1TB
      
  #### Client Side(Frontend Side Technical Stack)
  The front-end is the visual part of your application that users will see and interact with. This interaction can happen through a web browser or a mobile app. When building for the web, the front-end tech stack is made up of:
  * For Browser:
      * HTML(Markup Language)
      * CSS
      * JavaScript
      * BootStrap
      
      
  ## 4. Functional Specification
  The main requirement of our project is:
  * It keeps all the tutorial videos from class 1 to 10 for each subject.
  * Teacher can update, add and delete the videos in there teacher’s dashboard.
  * Student can continue to watch there tutorials from where they had left before.
  * Admin should verify the videos uploaded by tutor, only then user can see the videos.
  * Admin can delete the videos if required.
  
  ## 5. System Analysis
  
  #### ER-Diagram
  The ER Model is represented by means of an ER diagram. Any object, for example, entities, attributes of an entity, relationship sets, and attributes of relationship sets, can be represented with the help of an ER diagram. Entities are represented by means of rectangles. Rectangles are named with the entity set they represent. Attributes are the properties of entities. Attributes are represented by means of ellipses. Every ellipse represents one attribute and is directly connected to its entity (rectangle). Relationships are represented by diamond-shaped box. Name of the relationship is written inside the diamond-box. All the entities (rectangles) participating in a relationship, are connected to it by a line.
  The ER-diagram of our application is given below:
  ![erdiagram](https://user-images.githubusercontent.com/34769756/65542840-94886580-df2d-11e9-8af3-8a4ea3f3319d.jpg)
  
  
  ## 6. Database Tables
  #### 1. Login Table
   Attribute   |   Data Type
   ------------|--------------
   Id          |   Varchar
   Password    |   Varchar
  
  #### 2. Users Table
   Attribute | Data Type
   ----------| ----------
   Username  | Varchar
   Password  | Varchar
   Email     | Varchar
    
  #### 3. TutorLogin Table
   Attribute | Data Type
   ----------| ----------
   tutorId | Varchar
   tutorPass | Varchar
  
  #### 4. Tutors Table
   Attribute    | Data Type
   -------------| ----------
   tutorId      | Int(Auto Increment)
   tutorName    | Varchar
   tutorUserName| Varchar
   tutorPass    | Varchar
   tutorEmail   | Varchar
    
  #### 5. Videos Table
   Attribute | Data Type
   ----------| ----------
   videoId   | Int(Auto Increment)
   videoName | Varchar
   Class     | Varchar
   Subject   | Varchar
   Link      | Varchar
   tutorId   | Int(From tutors table)
   
   
   ## 7. User Manual
   
   ## 8. References
   * <https://unacademy.com/>
   * <https://www.w3schools.com/>
   * <https://www.google.com/>
   * <https://www.youtube.com/>
   * Prentice hall internet and world wide web how to program
   
      
      
  
  
  
  
  
  
  
