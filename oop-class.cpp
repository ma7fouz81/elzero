
#include <iostream>
using namespace std;

class car
{
private:
    int price;
    int model;
    string color;
    string name;

public:
    void set_price(int p)
    {
        price = p;
    }
    int get_price()
    {
        return price;
    }

    void set_model(int m)
    {
        model = m;
    }
    int get_model()
    {
        return model;
    }

    void set_color(string c)
    {
        color = c;
    }
    string get_color()
    {
        return color;
    }

    void set_name(string n)
    {
        name = n;
    }
    string get_name()
    {
        return name;
    }
};
int main()
{
    car c1;
    c1.set_color("Red");
    c1.set_model(1989);
    c1.set_name("Kia");
    c1.set_price(8000);
    cout << "Name Of Car is " << c1.get_name() << "\n";
    cout << "color Of Car is " << c1.get_color() << "\n";
    cout << "model Of Car is " << c1.get_model() << "\n";
    cout << "price Of Car is " << c1.get_price() << "\n";
}
