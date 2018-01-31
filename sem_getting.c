#include<stdio.h>
#include<conio.h>
void main()
{
		int year,jyr,cyr,cmon;
		clrscr();
		printf("\nEnter joining year");
		scanf("%d",&jyr);

		printf("\nEnter system/current year");
		scanf("%d",&cyr);

		printf("\nEnter system/current month");
		scanf("%d",&cmon);

		year=cyr-jyr;
		if(year==0)
		{
			printf("\nFirst year First sem");
		}
		if(year==1)
		{
			if(cmon<6)
			{
				printf("\nFirst year Second sem");
			}
			else if(cmon>7&&cmon<12)
			{
				printf("\nSecond year Third sem");
			}
		}	
		if(year==2)
		{
			if(cmon<6)
			{
				printf("\nSecond year fourth sem");
			}
			else if(cmon>7&&cmon<12)
			{
				printf("\nThird year fifth sem");
			}
		}	




}