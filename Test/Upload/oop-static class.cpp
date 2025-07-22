#include <iostream>
#include <string>
using namespace std;
class calc
{
public:
    static int add(int num1, int num2);
    static int multiply(int num1, int num2);
    static int subtruct(int num1, int num2);
};

int calc::add(int num1, int num2)
{
    return num1 + num2;
}
int calc::multiply(int num1, int num2)
{
    return num1 * num2;
}
int calc::subtruct(int num1, int num2)
{
    return num1 - num2;
}
int main()
{
    cout << calc::add(10, 20) << "\n";
    cout << calc::multiply(10, 20) << "\n";
    cout << calc::subtruct(20, 10) << "\n";
    return 0;
}