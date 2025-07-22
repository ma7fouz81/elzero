#include <iostream>
using namespace std;
class shape
{
	string color;
public:
	shape(string c)
	{
		color = c;
	}
	virtual int area()
	{
		cout << "parent class area is ";
		return 0;
	}
	virtual void draw()
	{
		cout << "draw parent shape in " << color << " color" <<
			"\n";
	}
	virtual void erase()
	{
		cout << "erase parent shape ";
	}
};
class rectangle :public shape
{
private:
	int length;
	int width;
public:
	rectangle(string c, int l, int w) : shape(c)
	{
		length = l;
		width = w;
	}int area()
	{
		cout << "area of rectangle is " << width * length << "\n";
		return width * length;
	}
	void draw()
	{
		cout << "draw rectangle" << "\n";
	}
	void erase()
	{
		cout << "rectangle erased";
	}
};
class circule :public shape
{
private:
	int raduis;
public:circule(string c, int r) :shape(c)
{
	raduis = r;
}
	  int area()
	  {
		  cout << "area is " << 3.14 * (raduis * raduis) << "\n";
		  return 3.14 * (raduis * raduis);
	  }
	  void draw()
	  {
		  cout << "draw circule";
	  }
	  void erase()
	  {
		  cout << "circule erased";
	  }
};
int main()
{
	shape* shape_ptr;
	rectangle rec("red", 7, 10);
	circule c("yello", 5);
	shape_ptr = &rec;
	shape_ptr->area();
	shape_ptr->draw();
	shape_ptr = &c;
	shape_ptr->area();
	shape_ptr->draw();
}
