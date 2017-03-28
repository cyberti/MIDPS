#include <iostream>
#include <string.h>
using namespace std;


int main(int argc, char** argv)
{
	FILE *open_fp, *result_fp;
	char buf[1000];
	int length = 0;

	cout << "\n" << argv[0];
	if ((open_fp = fopen(argv[1], "r")) == NULL)
	{
		printf("\nEROARE:imposibil de deschis fişierul %s.", argv[1]);
		return 0;
	}
	if ((result_fp = fopen("result.html", "w")) == NULL) 
	{
		printf("\nEROARE:imposibil de Creat fişierul \"Resultat\".");
		return 0;
	}
	while (length = fread(&buf, sizeof(char), 999, open_fp) > 0)
	{
		buf[length] = '\0';
		char *position = NULL;
		if (position = (char*)strstr("{\"entries\":[{\"url\":\"", buf))
		{
			fseek(open_fp, position - &buf[length], SEEK_CUR);
			fread(&buf, sizeof(char), 999, open_fp);

		}
		
	}

	fclose(open_fp);
	fclose(result_fp);
	return 0;
}