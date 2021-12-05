int pinPIR = 13;
int pinSounder = 11;
int value = 0;

void setup(){
  pinMode(pinPIR, INPUT);
  pinMode(pinSounder, OUTPUT);
  Serial.begin(9600);
}
void loop(){
  value = digitalRead(pinPIR);
  if(value == HIGH)
  {
   tone(pinSounder,1000);
   Serial.println("Gerak Terdeteksi");
   delay(200);
  }
 else
{
    noTone(pinSounder);
    Serial.println("Gerak Tidak Terdeteksi");
    delay(200);
  
 }
  
}
