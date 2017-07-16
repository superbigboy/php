<?php
	//feof函数：知道何时读完文件
	while(feof($fp)){
		//......
	}
	/*函数feof中唯一的参数是文件指针，如果该文件指针指向文件结尾，则返回true，否则false；feof（file end of file）*/

	//fgets函数：   fgetss函数
	$order = fgets($fp,999);
	//该函数可以每次从文件中读取一行内容，直到读到（\n）换行符或是文件结束符EOF停止，或者从文件中读到了998B，读到的长度为制定的长度-1B
	//fgetss函数可以过滤掉字符串中包含的html和php标记

	//fgetcsv函数
	$order = fgetcsv($fp,100,"\t");
	//该函数从文件中读取一行代码，并且再有制表符\t的地方进行换行，该函数执行结果返回数组

	//读取整个文件函数    readfile()、fpassthru()、file()
	readfile("文件名") //该函数打开文件并将文件内容输出到标准输出（浏览器）中，然后关闭文件

	$fp = fopen("order.txt", 'rb');
	fpassthru("$fp");
	//该函数必须先使用fopen打开文件，然后将文件指针作为参数传递给fpassthru

	file($fp);
	//除了可以将文件内容返回到标准输出外，和readfile文件是一样的，结果返回到一个数组中

	//读取一个字符
	fgetc(handle);
	//该函数一次从文本中读取一个字符，该函数缺点是文件结尾字符eof也会被他读取并返回

	//读取任意长度
	fread($fp,length)
	//该函数读满length所指定的字节书或者直接读到末尾

	//查看文件是否存在
	file_exists(filename);

	//查看文件大小
	filesize();

	//删除一个文件,php中没有 名为的delete函数
	unlink(filename);

	//在文件中定位
	rewind(handle);//可以将文件的指针复位到文件的开始
	fseek(handle, offset);     //将文件指针定位到文件的某个位置
	ftell(handle);    //可以以字节为单位报告文件指针当前所在位置
?>
