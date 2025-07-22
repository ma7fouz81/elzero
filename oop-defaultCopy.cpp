#include <iostream>
#include <string>
using namespace std;

class Distance
{
private:
    int feet;
    float inches;

public:
    Distance()
    {
        feet = 0;
        inches = 0;
    }
    Distance(int f, float i)
    {
        feet = f;
        inches = i;
    }
    void set_distance(int f, float i)
    {
        feet = f;
        inches = i;
    }
    void print()
    {
        cout << "value of feet = " << feet << "\n";
        cout << "value of inches = " << inches << "\n";
    }
};

int main()
{
    Distance d1;
    Distance d2(7, 4.5);
    Distance d3(d2);
    d3.print();
    d3.set_distance(8, 3.5);
    Distance d4 = d3;
    d3.print();
    return 0;
}
