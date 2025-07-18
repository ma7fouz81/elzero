
/*-------------------------------------------

 Constructor & Destructor 

-------------------------------------------*/
#include <iostream>
using namespace std;

class student {
private:
    string name;
    int id;

public:
    void set_name(string n) {
        name = n;
    }
    string get_name() {
        return name;
    }

    void set_id(int i) {
        id = i;
    }
    int get_id() {
        return id;
    }

    // Default constructor
    student() {
        name = "no name";
        id = 0;
    }

    // Constructor with parameters
    student(string n, int i) {
        name = n;
        id = i;
        cout << "Hello, you are in parameterized constructor\n";
    }

    ~student() {
        cout << "the object life time ended";
    }

    void print() {
        cout << "Name is " << name << "\n";
        cout << "ID is " << id << "\n";
    }
};

int main() {
    student c1("Ali", 561561651);
    c1.print();

    return 0;
}



