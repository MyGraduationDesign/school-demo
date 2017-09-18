#include<stdio.h> 
int main()
{
    int i,j,k,n,a[110],b[110];
    float c[110],max=0.0,y;
	double x=0;
    printf("请输入你所通过的必修课总数： ");
    while(scanf("%d",&n)!=EOF)//输入所通过必修课的总数n
    {
        printf("请输入每门课所考的分数与对应的学分！(中间有空格)\n");
        for(i = 0; i < n; i++)
		{
            printf("第 %d 门课：",i+1);
            scanf("%d %d",&a[i],&b[i]);//每门课所考的分数a[i]与所对应的学分b[i]
		}
        for(i=0 ;i < n; i++)
        {
            max=max+b[i];
            if(a[i]>=60 && a[i]<=64) c[i]=1;
            if(a[i]>=65 && a[i]<=69) c[i]=1.5;
            if(a[i]>=70 && a[i]<=74) c[i]=2;
            if(a[i]>=75 && a[i]<=79) c[i]=2.5;
            if(a[i]>=80 && a[i]<=84) c[i]=3;
            if(a[i]>=85 && a[i]<=89) c[i]=3.5;
            if(a[i]>=90 && a[i]<=94) c[i]=4;
            if(a[i]>=95 && a[i]<=100) c[i]=4.5;
        }
        for(i = 0;i < n;i++)
        {
            x=x+c[i]*b[i];
        }
        printf("%f\n",x/105.0);                    
    }
    return 0;    
}