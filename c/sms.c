#include <sys/types.h>
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
int main(int argc, char **argv)
{
    FILE *file = popen(&quot;/usr/bin/gnokii --sendsms 085774118760&quot;, &quot;w&quot;);
    fwrite(&quot;HURRAY MSG IS GOING WITH C CODES!!&quot;, 1, 5, file);
    pclose(file);
    return 0;
}