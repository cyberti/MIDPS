#pragma once
namespace CppWinForm1 {

	using namespace System;
	using namespace System::ComponentModel;
	using namespace System::Collections;
	using namespace System::Windows::Forms;
	using namespace System::Data;
	using namespace System::Drawing;

	/// <summary>
	/// Summary for MyForm
	/// </summary>
	public ref class MyForm : public System::Windows::Forms::Form
	{
	public:
		MyForm(void)
		{
			InitializeComponent();
			//
			//TODO: Add the constructor code here
			//
		}

	protected:
		/// <summary>
		/// Clean up any resources being used.
		/// </summary>
		~MyForm()
		{
			if (components)
			{
				delete components;
			}
		}
	private: System::Windows::Forms::Button^  button0;
	protected:

	protected:


	private: System::Windows::Forms::Button^  point;
	private: System::Windows::Forms::Button^  change_sign;


	private: System::Windows::Forms::Button^  Clear;

	private: System::Windows::Forms::Button^  equal;



	private: System::Windows::Forms::Button^  sub;

	private: System::Windows::Forms::Button^  add;
	private: System::Windows::Forms::Button^  button3;



	private: System::Windows::Forms::Button^  button2;

	private: System::Windows::Forms::Button^  button1;

	private: System::Windows::Forms::Button^  div;

	private: System::Windows::Forms::Button^  times;
	private: System::Windows::Forms::Button^  button6;



	private: System::Windows::Forms::Button^  button5;

	private: System::Windows::Forms::Button^  button4;

	private: System::Windows::Forms::Button^  sqrt;

	private: System::Windows::Forms::Button^  pow;
	private: System::Windows::Forms::Button^  button9;


	private: System::Windows::Forms::Button^  button8;

	private: System::Windows::Forms::Button^  button7;

	private: System::Windows::Forms::TextBox^  textBoxValue;
	private: System::Windows::Forms::Label^  labelOperatie;


	protected:

	private:
		/// <summary>
		/// Required designer variable.
		/// </summary>
		System::ComponentModel::Container ^components;

#pragma region Windows Form Designer generated code
		/// <summary>
		/// Required method for Designer support - do not modify
		/// the contents of this method with the code editor.
		/// </summary>
		void InitializeComponent(void)
		{
			this->button0 = (gcnew System::Windows::Forms::Button());
			this->point = (gcnew System::Windows::Forms::Button());
			this->change_sign = (gcnew System::Windows::Forms::Button());
			this->Clear = (gcnew System::Windows::Forms::Button());
			this->equal = (gcnew System::Windows::Forms::Button());
			this->sub = (gcnew System::Windows::Forms::Button());
			this->add = (gcnew System::Windows::Forms::Button());
			this->button3 = (gcnew System::Windows::Forms::Button());
			this->button2 = (gcnew System::Windows::Forms::Button());
			this->button1 = (gcnew System::Windows::Forms::Button());
			this->div = (gcnew System::Windows::Forms::Button());
			this->times = (gcnew System::Windows::Forms::Button());
			this->button6 = (gcnew System::Windows::Forms::Button());
			this->button5 = (gcnew System::Windows::Forms::Button());
			this->button4 = (gcnew System::Windows::Forms::Button());
			this->sqrt = (gcnew System::Windows::Forms::Button());
			this->pow = (gcnew System::Windows::Forms::Button());
			this->button9 = (gcnew System::Windows::Forms::Button());
			this->button8 = (gcnew System::Windows::Forms::Button());
			this->button7 = (gcnew System::Windows::Forms::Button());
			this->textBoxValue = (gcnew System::Windows::Forms::TextBox());
			this->labelOperatie = (gcnew System::Windows::Forms::Label());
			this->SuspendLayout();
			// 
			// button0
			// 
			this->button0->BackColor = System::Drawing::SystemColors::ActiveCaption;
			this->button0->Location = System::Drawing::Point(12, 165);
			this->button0->Name = L"button0";
			this->button0->Size = System::Drawing::Size(38, 33);
			this->button0->TabIndex = 1;
			this->button0->Text = L"0";
			this->button0->UseVisualStyleBackColor = false;
			this->button0->Click += gcnew System::EventHandler(this, &MyForm::buttonNumber_Click);
			// 
			// point
			// 
			this->point->BackColor = System::Drawing::SystemColors::GradientActiveCaption;
			this->point->Location = System::Drawing::Point(56, 165);
			this->point->Name = L"point";
			this->point->Size = System::Drawing::Size(38, 33);
			this->point->TabIndex = 2;
			this->point->Text = L".";
			this->point->UseVisualStyleBackColor = false;
			this->point->Click += gcnew System::EventHandler(this, &MyForm::point_Click);
			// 
			// change_sign
			// 
			this->change_sign->AccessibleName = L"change_sign";
			this->change_sign->BackColor = System::Drawing::SystemColors::GradientActiveCaption;
			this->change_sign->Location = System::Drawing::Point(100, 165);
			this->change_sign->Name = L"change_sign";
			this->change_sign->Size = System::Drawing::Size(38, 33);
			this->change_sign->TabIndex = 3;
			this->change_sign->Text = L"+/-";
			this->change_sign->UseVisualStyleBackColor = false;
			this->change_sign->Click += gcnew System::EventHandler(this, &MyForm::buttonOperations_Click);
			// 
			// Clear
			// 
			this->Clear->BackColor = System::Drawing::Color::RosyBrown;
			this->Clear->Location = System::Drawing::Point(144, 165);
			this->Clear->Name = L"Clear";
			this->Clear->Size = System::Drawing::Size(38, 33);
			this->Clear->TabIndex = 4;
			this->Clear->Text = L"C";
			this->Clear->UseVisualStyleBackColor = false;
			this->Clear->Click += gcnew System::EventHandler(this, &MyForm::buttonClear_Click);
			// 
			// equal
			// 
			this->equal->BackColor = System::Drawing::SystemColors::GradientActiveCaption;
			this->equal->Location = System::Drawing::Point(188, 165);
			this->equal->Name = L"equal";
			this->equal->Size = System::Drawing::Size(38, 33);
			this->equal->TabIndex = 5;
			this->equal->Text = L"=";
			this->equal->UseVisualStyleBackColor = false;
			this->equal->Click += gcnew System::EventHandler(this, &MyForm::equal_Click);
			// 
			// sub
			// 
			this->sub->BackColor = System::Drawing::SystemColors::GradientActiveCaption;
			this->sub->Location = System::Drawing::Point(188, 126);
			this->sub->Name = L"sub";
			this->sub->Size = System::Drawing::Size(38, 33);
			this->sub->TabIndex = 10;
			this->sub->Text = L"-";
			this->sub->UseVisualStyleBackColor = false;
			this->sub->Click += gcnew System::EventHandler(this, &MyForm::buttonOperations_Click);
			// 
			// add
			// 
			this->add->BackColor = System::Drawing::SystemColors::GradientActiveCaption;
			this->add->Location = System::Drawing::Point(144, 126);
			this->add->Name = L"add";
			this->add->Size = System::Drawing::Size(38, 33);
			this->add->TabIndex = 9;
			this->add->Text = L"+";
			this->add->UseVisualStyleBackColor = false;
			this->add->Click += gcnew System::EventHandler(this, &MyForm::buttonOperations_Click);
			// 
			// button3
			// 
			this->button3->BackColor = System::Drawing::SystemColors::ActiveCaption;
			this->button3->Location = System::Drawing::Point(100, 126);
			this->button3->Name = L"button3";
			this->button3->Size = System::Drawing::Size(38, 33);
			this->button3->TabIndex = 8;
			this->button3->Text = L"3";
			this->button3->UseVisualStyleBackColor = false;
			this->button3->Click += gcnew System::EventHandler(this, &MyForm::buttonNumber_Click);
			// 
			// button2
			// 
			this->button2->BackColor = System::Drawing::SystemColors::ActiveCaption;
			this->button2->Location = System::Drawing::Point(56, 126);
			this->button2->Name = L"button2";
			this->button2->Size = System::Drawing::Size(38, 33);
			this->button2->TabIndex = 7;
			this->button2->Text = L"2";
			this->button2->UseVisualStyleBackColor = false;
			this->button2->Click += gcnew System::EventHandler(this, &MyForm::buttonNumber_Click);
			// 
			// button1
			// 
			this->button1->BackColor = System::Drawing::SystemColors::ActiveCaption;
			this->button1->Location = System::Drawing::Point(12, 126);
			this->button1->Name = L"button1";
			this->button1->Size = System::Drawing::Size(38, 33);
			this->button1->TabIndex = 6;
			this->button1->Text = L"1";
			this->button1->UseVisualStyleBackColor = false;
			this->button1->Click += gcnew System::EventHandler(this, &MyForm::buttonNumber_Click);
			// 
			// div
			// 
			this->div->BackColor = System::Drawing::SystemColors::GradientActiveCaption;
			this->div->Location = System::Drawing::Point(188, 87);
			this->div->Name = L"div";
			this->div->Size = System::Drawing::Size(38, 33);
			this->div->TabIndex = 15;
			this->div->Text = L"/";
			this->div->UseVisualStyleBackColor = false;
			this->div->Click += gcnew System::EventHandler(this, &MyForm::buttonOperations_Click);
			// 
			// times
			// 
			this->times->BackColor = System::Drawing::SystemColors::GradientActiveCaption;
			this->times->Location = System::Drawing::Point(144, 87);
			this->times->Name = L"times";
			this->times->Size = System::Drawing::Size(38, 33);
			this->times->TabIndex = 14;
			this->times->Text = L"*";
			this->times->UseVisualStyleBackColor = false;
			this->times->Click += gcnew System::EventHandler(this, &MyForm::buttonOperations_Click);
			// 
			// button6
			// 
			this->button6->BackColor = System::Drawing::SystemColors::ActiveCaption;
			this->button6->Location = System::Drawing::Point(100, 87);
			this->button6->Name = L"button6";
			this->button6->Size = System::Drawing::Size(38, 33);
			this->button6->TabIndex = 13;
			this->button6->Text = L"6";
			this->button6->UseVisualStyleBackColor = false;
			this->button6->Click += gcnew System::EventHandler(this, &MyForm::buttonNumber_Click);
			// 
			// button5
			// 
			this->button5->BackColor = System::Drawing::SystemColors::ActiveCaption;
			this->button5->Location = System::Drawing::Point(56, 87);
			this->button5->Name = L"button5";
			this->button5->Size = System::Drawing::Size(38, 33);
			this->button5->TabIndex = 12;
			this->button5->Text = L"5";
			this->button5->UseVisualStyleBackColor = false;
			this->button5->Click += gcnew System::EventHandler(this, &MyForm::buttonNumber_Click);
			// 
			// button4
			// 
			this->button4->BackColor = System::Drawing::SystemColors::ActiveCaption;
			this->button4->Location = System::Drawing::Point(12, 87);
			this->button4->Name = L"button4";
			this->button4->Size = System::Drawing::Size(38, 33);
			this->button4->TabIndex = 11;
			this->button4->Text = L"4";
			this->button4->UseVisualStyleBackColor = false;
			this->button4->Click += gcnew System::EventHandler(this, &MyForm::buttonNumber_Click);
			// 
			// sqrt
			// 
			this->sqrt->BackColor = System::Drawing::SystemColors::GradientActiveCaption;
			this->sqrt->Location = System::Drawing::Point(188, 48);
			this->sqrt->Name = L"sqrt";
			this->sqrt->Size = System::Drawing::Size(38, 33);
			this->sqrt->TabIndex = 20;
			this->sqrt->Text = L"√";
			this->sqrt->UseVisualStyleBackColor = false;
			this->sqrt->Click += gcnew System::EventHandler(this, &MyForm::buttonOperations_Click);
			// 
			// pow
			// 
			this->pow->BackColor = System::Drawing::SystemColors::GradientActiveCaption;
			this->pow->Location = System::Drawing::Point(144, 48);
			this->pow->Name = L"pow";
			this->pow->Size = System::Drawing::Size(38, 33);
			this->pow->TabIndex = 19;
			this->pow->Text = L"^";
			this->pow->UseVisualStyleBackColor = false;
			this->pow->Click += gcnew System::EventHandler(this, &MyForm::buttonOperations_Click);
			// 
			// button9
			// 
			this->button9->BackColor = System::Drawing::SystemColors::ActiveCaption;
			this->button9->Location = System::Drawing::Point(100, 48);
			this->button9->Name = L"button9";
			this->button9->Size = System::Drawing::Size(38, 33);
			this->button9->TabIndex = 18;
			this->button9->Text = L"9";
			this->button9->UseVisualStyleBackColor = false;
			this->button9->Click += gcnew System::EventHandler(this, &MyForm::buttonNumber_Click);
			// 
			// button8
			// 
			this->button8->BackColor = System::Drawing::SystemColors::ActiveCaption;
			this->button8->Location = System::Drawing::Point(56, 48);
			this->button8->Name = L"button8";
			this->button8->Size = System::Drawing::Size(38, 33);
			this->button8->TabIndex = 17;
			this->button8->Text = L"8";
			this->button8->UseVisualStyleBackColor = false;
			this->button8->Click += gcnew System::EventHandler(this, &MyForm::buttonNumber_Click);
			// 
			// button7
			// 
			this->button7->BackColor = System::Drawing::SystemColors::ActiveCaption;
			this->button7->Location = System::Drawing::Point(12, 48);
			this->button7->Name = L"button7";
			this->button7->Size = System::Drawing::Size(38, 33);
			this->button7->TabIndex = 16;
			this->button7->Text = L"7";
			this->button7->UseVisualStyleBackColor = false;
			this->button7->Click += gcnew System::EventHandler(this, &MyForm::buttonNumber_Click);
			// 
			// textBoxValue
			// 
			this->textBoxValue->Font = (gcnew System::Drawing::Font(L"Microsoft Sans Serif", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
				static_cast<System::Byte>(204)));
			this->textBoxValue->Location = System::Drawing::Point(12, 12);
			this->textBoxValue->Name = L"textBoxValue";
			this->textBoxValue->Size = System::Drawing::Size(214, 26);
			this->textBoxValue->TabIndex = 21;
			this->textBoxValue->Text = L"0";
			this->textBoxValue->TextAlign = System::Windows::Forms::HorizontalAlignment::Right;
			// 
			// labelOperatie
			// 
			this->labelOperatie->AutoSize = true;
			this->labelOperatie->BackColor = System::Drawing::SystemColors::Window;
			this->labelOperatie->Location = System::Drawing::Point(13, 18);
			this->labelOperatie->Name = L"labelOperatie";
			this->labelOperatie->Size = System::Drawing::Size(0, 13);
			this->labelOperatie->TabIndex = 22;
			// 
			// MyForm
			// 
			this->AllowDrop = true;
			this->AutoScaleDimensions = System::Drawing::SizeF(6, 13);
			this->AutoScaleMode = System::Windows::Forms::AutoScaleMode::Font;
			this->ClientSize = System::Drawing::Size(236, 206);
			this->Controls->Add(this->labelOperatie);
			this->Controls->Add(this->textBoxValue);
			this->Controls->Add(this->sqrt);
			this->Controls->Add(this->pow);
			this->Controls->Add(this->button9);
			this->Controls->Add(this->button8);
			this->Controls->Add(this->button7);
			this->Controls->Add(this->div);
			this->Controls->Add(this->times);
			this->Controls->Add(this->button6);
			this->Controls->Add(this->button5);
			this->Controls->Add(this->button4);
			this->Controls->Add(this->sub);
			this->Controls->Add(this->add);
			this->Controls->Add(this->button3);
			this->Controls->Add(this->button2);
			this->Controls->Add(this->button1);
			this->Controls->Add(this->equal);
			this->Controls->Add(this->Clear);
			this->Controls->Add(this->change_sign);
			this->Controls->Add(this->point);
			this->Controls->Add(this->button0);
			this->FormBorderStyle = System::Windows::Forms::FormBorderStyle::FixedSingle;
			this->KeyPreview = true;
			this->MaximizeBox = false;
			this->Name = L"MyForm";
			this->Text = L"Calculator";
			this->Load += gcnew System::EventHandler(this, &MyForm::MyForm_Load);
			this->KeyPress += gcnew System::Windows::Forms::KeyPressEventHandler(this, &MyForm::MainForm_KeyPress);
			this->ResumeLayout(false);
			this->PerformLayout();

		}

#pragma endregion
		Double value = 0;
		String^ operation = "";
		bool operation_pressed = false;
		int numbers_count = 0;

	private: System::Void MyForm_Load(System::Object^  sender, System::EventArgs^  e) 
	{
		//
	}

private: System::Void buttonNumber_Click(System::Object^  sender, System::EventArgs^  e) 
{
	if (textBoxValue->Text == "0" || operation_pressed || labelOperatie->Text == "=")
	{
		textBoxValue->Clear();
		operation_pressed = false;
	}
	if (numbers_count < 16)
	{
		numbers_count++;
		Button^ bottonValue = (Button^)sender;
		textBoxValue->Text = textBoxValue->Text + bottonValue->Text;
	}
	labelOperatie->Text = "";
}

private: System::Void buttonClear_Click(System::Object^  sender, System::EventArgs^  e)
{
	if (textBoxValue->Text != "0")
		textBoxValue->Text = "0";
	value = 0;
	numbers_count = 0;
	labelOperatie->Text = "";
	operation = "";
}

private: System::Void buttonOperations_Click(System::Object^  sender, System::EventArgs^  e)
{
	Button^ bottonValue = (Button^)sender;
	String^ a = bottonValue->Text;
	if (!operation_pressed)
	{
		//textBoxValue->Text = Convert::ToInt32(textBoxValue->Text) + value;
		if(operation == "+")
			textBoxValue->Text = System::Convert::ToString(value + Double::Parse(textBoxValue->Text));
		else if (operation == "-")
			textBoxValue->Text = System::Convert::ToString(value - Double::Parse(textBoxValue->Text));
		else if (operation == "*")
			textBoxValue->Text = System::Convert::ToString(value * Double::Parse(textBoxValue->Text));
		else if (operation == "/")
			textBoxValue->Text = System::Convert::ToString(value / Double::Parse(textBoxValue->Text));
		else if (operation == "^")
			textBoxValue->Text = System::Convert::ToString(Math::Pow(value, Double::Parse(textBoxValue->Text)));

		value = Double::Parse(textBoxValue->Text);
	}
	labelOperatie->Text = bottonValue->Text;
	if (bottonValue->AccessibleName == "change_sign")
	{
		textBoxValue->Text = System::Convert::ToString(Double::Parse(textBoxValue->Text) * (-1));
		value = Double::Parse(textBoxValue->Text);
		labelOperatie->Text = "";
	}
	else if (bottonValue->Text == "√")
	{
		textBoxValue->Text = System::Convert::ToString(Math::Sqrt(Double::Parse(textBoxValue->Text)));
		value = Double::Parse(textBoxValue->Text);
		labelOperatie->Text = "";
	}
	operation = bottonValue->Text;
	operation_pressed = true;
	numbers_count = 0;
}

private: System::Void equal_Click(System::Object^  sender, System::EventArgs^  e)
{
	buttonOperations_Click(sender, e);
	labelOperatie->Text = "=";
	operation_pressed = false;
}

private: System::Void point_Click(System::Object^  sender, System::EventArgs^  e)
{
	if (!textBoxValue->Text->Contains(","))
		textBoxValue->Text = textBoxValue->Text + ",";
}

private: System::Void MainForm_KeyPress(System::Object^  sender, System::Windows::Forms::KeyPressEventArgs^  e)
{
	//char a = System::Convert::ToChar(e->KeyChar);
	switch (System::Convert::ToChar(e->KeyChar))
	{
		//String^ a = System::Convert::ToString(e->KeyChar);
	case '0':
		button0->PerformClick();
		break;
	case '1':
		button1->PerformClick();
		break;
	case '2':
		button2->PerformClick();
		break;
	case '3':
		button3->PerformClick();
		break;
	case '4':
		button4->PerformClick();
		break;
	case '5':
		button5->PerformClick();
		break;
	case '6':
		button6->PerformClick();
		break;
	case '7':
		button7->PerformClick();
		break;
	case '8':
		button8->PerformClick();
		break;
	case '9':
		button9->PerformClick();
		break;
	case '+':
		add->PerformClick();
		break;
	case '-':
		sub->PerformClick();
		break;
	case '*':
		times->PerformClick();
		break;
	case '/':
		div->PerformClick();
		break;
	case '.':
		point->PerformClick();
	default:
		break;
	}
}
};
}
