
void * rideshare(void * argv)
{
   
    char teamname = * (char*)argv;
    
    if(teamname == 'A')
    {
        pthread$\_$mutex$\_$lock(&mutex$\_$A);  //locking for the fan who is looking for a car
        printf("Thread ID: %ld, Team: %c, I am currently looking for a car\n", pthread$\_$self(), teamname);
        
        A$\_$fans++;

        if( B$\_$fans >= 2 &&A$\_$fans == 2 )
        {
            //if team A has 2 fans team B has more
            sem$\_$post(&sem$\_$A);
            sem$\_$post(&sem$\_$B);
            sem$\_$post(&sem$\_$A);
            sem$\_$post(&sem$\_$B);
            A$\_$fans -= 2;
            B$\_$fans-= 2;
        }
        
        else if(B$\_$fans == 4)
        {
            //put all the team B fans into the same car
            sem$\_$post(&sem$\_$B);
            sem$\_$post(&sem$\_$B);
            sem$\_$post(&sem$\_$B);
            sem$\_$post(&sem$\_$B);
            B$\_$fans -= 4;
        }

        else if(A$\_$fans == 4)
        {
            //put all the team A fans into the same car
            sem$\_$post(&sem$\_$A);
            sem$\_$post(&sem$\_$A);
            sem$\_$post(&sem$\_$A);
            sem$\_$post(&sem$\_$A);
            A$\_$fans -= 4;
        }
        pthread$\_$mutex$\_$unlock(&mutex$\_$A);
        sem$\_$wait(&sem$\_$A);
    }
    else if(teamname == 'B')
    {
        pthread$\_$mutex$\_$lock(&mutex$\_$B);
        printf("Thread ID: %ld, Team: %c, I am currently looking for a car\n", pthread$\_$self(), teamname);
        B$\_$fans++;
        
        if(B$\_$fans == 2&& A$\_$fans >= 2  )
        {
            sem$\_$post(&sem$\_$B);
            sem$\_$post(&sem$\_$A);
            sem$\_$post(&sem$\_$B);
            sem$\_$post(&sem$\_$A);
            A$\_$fans -= 2;
            B$\_$fans -= 2;
        }
        else if(B$\_$fans == 4)
        {
            sem$\_$post(&sem$\_$B);
            sem$\_$post(&sem$\_$B);
            sem$\_$post(&sem$\_$B);
            sem$\_$post(&sem$\_$B);
            B$\_$fans -= 4;
        }
        else if(A$\_$fans == 4)
        {
            sem$\_$post(&sem$\_$A);
            sem$\_$post(&sem$\_$A);
            sem$\_$post(&sem$\_$A);
            sem$\_$post(&sem$\_$A);
            A$\_$fans -= 4;
        }
        pthread$\_$mutex$\_$unlock(&mutex$\_$B);
        sem$\_$wait(&sem$\_$B);
    }
    
    
    if(teamname == 'A' || teamname == 'B')
    {

        pthread$\_$mutex$\_$lock(&mutex$\_$AB); //locking when fans start to find a car
        printf("Thread ID: %ld, Team: %c, I have found a spot on the car\n", pthread$\_$self(), teamname);

        captain++; //counting fans to find the captain
        
       
        if(captain % 4 == 0 && captain != 0) //every time it is divisible to 4 it means it is the last one in car so it is the captain
        {
            printf("Thread ID: %ld, Team: %c, I am the captain and driving the car\n", pthread$\_$self(), teamname);
        }

        
        pthread$\_$mutex$\_$unlock(&mutex$\_$AB); //unlocking when the car is full
    }  
}
