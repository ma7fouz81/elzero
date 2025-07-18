#include <iostream>
#include <string>
using namespace std;

class calculate {
public:
    int add(int num1, int num2);
    int add(int num1, int num2, int num3);
    float add(float num1, float num2);
    string add(string a, string b);
};

int calculate::add(int num1, int num2) {
    return num1 + num2;
}

int calculate::add(int num1, int num2, int num3) {
    return num1 + num2 + num3;
}

float calculate::add(float num1, float num2) {
    return num1 + num2;
}

string calculate::add(string a, string b) {
    return a + " " + b;
}

int main() {
    calculate c1;
    cout << "Summition of version1: " << c1.add(3, 7) << "\n";
    cout << "Summition of version2: " << c1.add(3, 7, 10) << "\n";
    cout << "Summition of version3: " << c1.add(5.5f, 4.5f) << "\n";
    cout << "Summition of version4: " << c1.add(string("Ahmed"), string("Mahfouz")) << "\n";
    return 0;
}
