run b.odt;
winwaitactive b.odt ahk_class SALFRAME;
sleep 1000;
send !tuu
sleep 1000;
send ^p;
winwaitactive Print ahk_class SALSUBFRAME;
send {return};


