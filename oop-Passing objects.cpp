#include <iostream>
#include <string>
using namespace std;
class Distance
{
private:
    int feet;
    int inches;

public:
    Distance()
    {
        feet = 0;
        inches = 0;
    }
    Distance(int f, int i)
    {
        feet = f;
        inches = i;
    }
    void set_Distance(int f, int i)
    {
        feet = f;
        inches = i;
    }
    void print()
    {
        cout << "Feet is " << feet << " " << "inches is " << inches;
    }

    Distance add_distance(Distance d2)
    {
        Distance result;
        result.feet = feet + d2.feet;
        result.inches = inches + d2.inches;
        return result;
    }
};
int main()
{
    Distance ob1(10, 20);
    Distance ob2(11, 22);
    Distance ob3 = ob1.add_distance(ob2);
    ob3.print();
    return 0;
}