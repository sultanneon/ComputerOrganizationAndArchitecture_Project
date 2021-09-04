.model small
.stack 100h
.data

;*****************************************************************************
;                            FOR ENTRY LEVEL  
;*****************************************************************************
group1 db 10,13,'Computer Organization and Architecture(Section-A)'
group2 db 10,13,'-------------------------------------------------$' 
group3 db 10,13,'-------Project: EASY TICKET, EASY TRAVEL-------- $' 
group4 db 10,13,'-----------------Group members:-----------------$'
group5 db 10,13,'-----------SULTAN, TOFAYET_19-40385-1----------- $'
group6 db 10,13,'-----------JAHAN, NUSRAT_19-40355-1------------- $'
group7 db 10,13,'------------ZAMIL, AHMED_19-40400-1------------- $'
group8 db 10,13,'----------TALUKDER, EHSAN_19-40370-1------------$'
group9 db 10,13,'---------Instructor:MD. NAZMUL HOSSAIN---------- $' 

entry1 db 10,13,10,13,'***Do you want to buy ticket?*** $',
entry2 db 10,13,'If yes enter y/Y  $'
entry3 db 10,13,'For exit enter e/E $'
  
;*****************************************************************************
;                            FOR CHOOSING ROUTE  
;*****************************************************************************

r1 db 10,13,10,13,'***You are allowed to buy max three ticket at a time*** $',
r2 db 10,13,'Choose the route- $'
r3 db 10,13,'Enter 1 for DHAKA to KHULNA $'
r4 db 10,13,'Enter 2 for DHAKA to CHATTAGRAM$'  
r5 db 10,13,'Enter 3 for DHAKA to BARISHAL $'
r6 db 10,13,'Enter 4 for DHAKA to PABNA',10,13,'$'

;*****************************************************************************
;                        FOR CHOOSING BUS OF KHULNA
;*****************************************************************************

k1 db 10,13,10,13,'Choose bus of Dhaka to Khulna route- $'
k2 db 10,13,'Enter 1 for HANIF-----(Per seat cost 220 tk) $'
k3 db 10,13,'Enter 2 for ENA-------(Per seat cost 180 tk)  ',10,13,'$' 


;*****************************************************************************
;                      FOR CHOOSING BUS OF CHATTAGRAM
;***************************************************************************** 
  
c1 db 10,13,10,13,'Choose bus of Dhaka to Chattagram route- $'
c2 db 10,13,'Enter 1 for STAR LINE----(Per seat cost 230) $'
c3 db 10,13,'Enter 2 for GREEN LINE---(Per seat cost 260) ',10,13,'$' 

 
;*****************************************************************************
;                       FOR CHOOSING BUS OF BARISHAL
;***************************************************************************** 

b1 db 10,13,10,13,'Choose bus of Dhaka to Barishal route- $'
b2 db 10,13,'Enter 1 for Nabil-----(Per seat cost 120 tk) $'
b3 db 10,13,'Enter 2 for Dream line-------(Per seat cost 180 tk)  ',10,13,'$' 


;*****************************************************************************
;                         FOR CHOOSING BUS OF PABNA
;*****************************************************************************   
p1 db 10,13,10,13,'Choose bus of Dhaka to Pabna route- $'
p2 db 10,13,'Enter 1 for Unique----(Per seat cost 130) $'
p3 db 10,13,'Enter 2 for Indiana---(Per seat cost 220) ',10,13,'$'   


;*****************************************************************************
;                         FOR CHOOSING Time
;*****************************************************************************   
time1 db 10,13,10,13,'Choose time of bus- $'   

;------------------------------TIME OF HANIF BUS------------------------------
htime2 db 10,13,'Enter 1 for 8:30am $'
htime3 db 10,13,'Enter 2 for 4:30pm',10,13,'$'

;------------------------------TIME OF ENA BUS------------------------------
etime2 db 10,13,'Enter 1 for 9:30am $'
etime3 db 10,13,'Enter 2 for 5:30pm',10,13,'$'

;------------------------------TIME OF STARLINE BUS------------------------------
stime2 db 10,13,'Enter 1 for 10:00am $'
stime3 db 10,13,'Enter 2 for 06:00pm',10,13,'$' 

;------------------------------TIME OF GREEN LINE BUS------------------------------
gtime2 db 10,13,'Enter 1 for 05:00am $'
gtime3 db 10,13,'Enter 2 for 03:00pm',10,13,'$' 

;------------------------------TIME OF NABIL BUS------------------------------
ntime2 db 10,13,'Enter 1 for 11:00am $'
ntime3 db 10,13,'Enter 2 for 07:00pm',10,13,'$'  

;------------------------------TIME OF DREAM LINE BUS------------------------------
dtime2 db 10,13,'Enter 1 for 04:00am $'
dtime3 db 10,13,'Enter 2 for 01:00pm',10,13,'$'  

;------------------------------TIME OF UNIQUE BUS------------------------------
utime2 db 10,13,'Enter 1 for 03:00am $'
utime3 db 10,13,'Enter 2 for 12:30pm',10,13,'$'

;------------------------------TIME OF INDIANA BUS------------------------------
itime2 db 10,13,'Enter 1 for 08:00am $'
itime3 db 10,13,'Enter 2 for 03:15pm',10,13,'$'

seat1 db 10,13,10,13,'How many seat you want to buy(MAX-3 allowed): $';NUMBER OF SEAT  

 
;*****************************************************************************
;                  RECEIPT AFTER CHOOSING NUMBER OF SEATS
;*****************************************************************************

;------------------------------RECEIPT OF HANIF BUS------------------------------
h18 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:08:30am',10,13,'Total cost=1*220',10,13,'220 tk $'
h28 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:08:30am',10,13,'Total cost=2*220',10,13,'440 tk $'
h38 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:08:30am',10,13,'Total cost=3*220',10,13,'660 tk $'      

;------------------------------RECEIPT OF HANIF BUS------------------------------
h14 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:04:30pm',10,13,'Total cost=1*220',10,13,'220 tk $'
h24 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:04:30pm',10,13,'Total cost=2*220',10,13,'440 tk $'
h34 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:04:30pm',10,13,'Total cost=3*220',10,13,'660 tk $'                                                                                                           
                                                                                                          
;------------------------------RECEIPT OF ENA BUS------------------------------
e18 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:09:30am',10,13,'Total cost=1*180',10,13,'180 tk $'
e28 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:09:30am',10,13,'Total cost=2*180',10,13,'360 tk $'
e38 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:09:30am',10,13,'Total cost=3*180',10,13,'540 tk $' 

;------------------------------RECEIPT OF ENA BUS------------------------------
e14 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:05:30pm',10,13,'Total cost=1*180',10,13,'180 tk $'
e24 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:05:30pm',10,13,'Total cost=2*180',10,13,'360 tk $'
e34 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:05:30pm',10,13,'Total cost=3*180',10,13,'540 tk $'                                                                                                             
                                                                                                                                                                                                                                                                                 
;------------------------------RECEIPT OF STARLINE BUS------------------------------                                                                                                      
s18 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:10:00am',10,13,'Total cost=1*230',10,13,'230 tk $'
s28 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:10:00am',10,13,'Total cost=2*230',10,13,'460 tk $'
s38 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:10:00am',10,13,'Total cost=3*230',10,13,'690 tk $' 

;------------------------------RECEIPT OF STARLINE BUS------------------------------
s14 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:06:00pm',10,13,'Total cost=1*230',10,13,'230 tk $'
s24 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:06:00pm',10,13,'Total cost=2*230',10,13,'460 tk $'
s34 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:06:00pm',10,13,'Total cost=3*230',10,13,'690 tk $' 

;------------------------------RECEIPT OF GREENLINE BUS------------------------------  
g18 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:05:00am',10,13,'Total cost=1*260',10,13,'260 tk $'
g28 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:05:00am',10,13,'Total cost=2*260',10,13,'520 tk $'
g38 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:05:00am',10,13,'Total cost=3*260',10,13,'780 tk $'

;------------------------------RECEIPT OF GREENLINE BUS------------------------------
g14 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:03:00pm',10,13,'Total cost=1*260',10,13,'260 tk $'
g24 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:03:00pm',10,13,'Total cost=2*260',10,13,'520 tk $'
g34 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:03:00pm',10,13,'Total cost=3*260',10,13,'780 tk $'
                                                                                                                                   
;------------------------------RECEIPT OF NABIL BUS------------------------------                                                                                                                                                                                                                                                                    
n18 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:11:00am',10,13,'Total cost=1*120',10,13,'120 tk $'
n28 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:11:00am',10,13,'Total cost=2*120',10,13,'240 tk $'
n38 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:11:00am',10,13,'Total cost=3*120',10,13,'360 tk $'      

;------------------------------RECEIPT OF NABIL BUS------------------------------
n14 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:07:00pm',10,13,'Total cost=1*120',10,13,'120 tk $'
n24 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:07:00pm',10,13,'Total cost=2*120',10,13,'240 tk $'
n34 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:07:00pm',10,13,'Total cost=3*120',10,13,'360 tk $'  

;------------------------------RECEIPT OF DREAM LINE BUS------------------------------
d18 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:4:00am',10,13,'Total cost=1*180',10,13,'180 tk $'
d28 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:4:00am',10,13,'Total cost=2*180',10,13,'360 tk $'
d38 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:4:00am',10,13,'Total cost=3*180',10,13,'540 tk $'    

;------------------------------RECEIPT OF DREAM LINE BUS------------------------------
d14 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:1:00pm',10,13,'Total cost=1*180',10,13,'180 tk $'
d24 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:1:00pm',10,13,'Total cost=2*180',10,13,'360 tk $'
d34 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:1:00pm',10,13,'Total cost=3*180',10,13,'540 tk $'   

;------------------------------RECEIPT OF UNIQUE BUS------------------------------
u18 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:03:00am',10,13,'Total cost=1*130',10,13,'130 tk $'
u28 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:03:00am',10,13,'Total cost=2*130',10,13,'260 tk $'
u38 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:03:00am',10,13,'Total cost=3*130',10,13,'390 tk $'     

;------------------------------RECEIPT OF UNIQUE BUS------------------------------
u14 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:12:30pm',10,13,'Total cost=1*130',10,13,'130 tk $'
u24 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:12:30pm',10,13,'Total cost=2*130',10,13,'260 tk $'
u34 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:12:30pm',10,13,'Total cost=3*130',10,13,'390 tk $' 
     
;------------------------------RECEIPT OF INDIANA BUS------------------------------     
i18 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:08:00am',10,13,'Total cost=1*220',10,13,'220 tk $'
i28 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:08:00am',10,13,'Total cost=2*220',10,13,'440 tk $'
i38 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:08:00am',10,13,'Total cost=3*220',10,13,'360 tk $'   

;------------------------------RECEIPT OF INDIANA BUS------------------------------
i14 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:03:15pm',10,13,'Total cost=1*220',10,13,'220 tk $'
i24 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:03:15pm',10,13,'Total cost=2*220',10,13,'440 tk $'
i34 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:03:15pm',10,13,'Total cost=3*220',10,13,'360 tk $'
       
;*****************************************************************************
;                  TO ORDER AGAIN/INVALID LEVEL/FINAL DECISION
;***************************************************************************** 

;------------------------------FOR CONFIRMATION------------------------------
confirm1 db 10,13,10,13,'Are you sure to confirm order $'
confirm2 db 10,13,'If you are confirm enter-y/Y $'
confirm3 db 10,13,'If you want to order something new enter-n/N$' 
confirm4 db 10,13,'If you want to exit from application enter-e/E',10,13,'$' 

;------------------------------FOR INVALID LEVEL------------------------------
invalid1 db 10,13,10,13,'Given an invalid input $'
invalid2 db 10,13,'If you want to buy ticket enter-y/Y $'
invalid3 db 10,13,'Otherwise for exit enter-n/N',10,13,'$'  

;------------------------------FOR ORDERING MORE------------------------------
more1 db 10,13,10,13,'Still interested to buy ticket?$'
more2 db 10,13,'If you want to buy ticket enter-y/Y $'
more3 db 10,13,'Otherwise for exit enter-n/N',10,13,' $'   

;------------------------------FOR FINAL TASK------------------------------
done1 db 10,13,10,13,'Order done(Bought 3 ticket which is max limit) $'
done2 db 10,13,'Thank you for using "EASY TICKET, EASY TRAVEL$'       
            
.code
main proc
    mov ax,@data  ;To initialize data segment
    mov ds,ax 
     
    mov ah,9     ;To display entry portion
    lea dx,group1 
    int 21h
    lea dx,group2 
    int 21h 
    lea dx,group9 
    int 21h 
    lea dx,group3 
    int 21h  
    lea dx,group4 
    int 21h 
    lea dx,group5 
    int 21h
    lea dx,group6 
    int 21h 
    lea dx,group7 
    int 21h 
    lea dx,group8 
    int 21h
    lea dx,group2 
    int 21h
    lea dx,group2 
    int 21h  
    
    
Entry:  
      mov ah,9     ;To display all the route available
    lea dx,entry1 
    int 21h
    lea dx,entry2 
    int 21h
    lea dx,entry3 
    int 21h    
    
    
    mov ah,01h    ;To take the input choice
    int 21h
    
    cmp al,'y'    ;y/Y to buy ticket
    jz chooseRoute   
    cmp al,'Y'    
    jz chooseRoute
    
    cmp al,'e'    ;Two for exit 
    jz exit  
    cmp al,'E'   
    jz exit      
    
    jmp invalid   ;For invalid input  
    

chooseRoute:    
    mov ah,9     ;To display all the route available
    lea dx,r1 
    int 21h
    lea dx,r2 
    int 21h
    lea dx,r3 
    int 21h 
    lea dx,r4 
    int 21h    
    lea dx,r5 
    int 21h 
    lea dx,r6 
    int 21h
    
    
    mov ah,01h    ;To take the input choice of the user
    int 21h
    
    cmp al,'1'    ;One for Khulna
    jz khulna
    
    cmp al,'2'
    jz chattagram ;Two for Chattagram 
    
    cmp al,'3'
    jz barishal   ;Three for Barishal
    
    cmp al,'4'    ;Four for Pabna
    jz pabna 
    
    jmp invalid   ;For invalid input
        
 
khulna:          
    mov ah,9      ;To display the available bus of Khulna
    lea dx,k1 
    int 21h   
    lea dx,k2 
    int 21h 
    lea dx,k3 
    int 21h
    
    mov ah,01h    ;To take the choice input
    int 21h
    
    cmp al,'1'    ;One for Hanif
    jz hanif
    
    cmp al,'2'    ;Two for Ena
    jz ena
    
    jmp invalid   ;For invalid input
    
hanif: 
    mov ah,9      ;To ask time
    lea dx,time1 
    int 21h 
    lea dx,htime2 
    int 21h
    lea dx,htime3 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for 8:30am
    jz h8
    
    cmp al,'2'    ;Jump for 4:30pm
    jz h4   

    jmp invalid   ;For invalid input
    
ena: 
    mov ah,9      ;To ask time
    lea dx,time1 
    int 21h 
    lea dx,etime2 
    int 21h
    lea dx,etime3 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for 9:30am
    jz e8
    
    cmp al,'2'    ;Jump for 5:30pm
    jz e4  
    
    jmp invalid   ;For invalid input 

h8: 
    mov ah,9      ;To ask number of seat userwant to buy
    lea dx,seat1 
    int 21h  
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for one seat
    jz h8One
    
    cmp al,'2'    ;Jump for two seat
    jz h8Two   

    cmp al,'3'    ;Jump for three seat
    jz h8Three  
    
    jmp invalid   ;For invalid input 
    
h4: 
    mov ah,9      ;To ask number of seat user want to buy
    lea dx,seat1 
    int 21h  
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for one seat
    jz h4One
    
    cmp al,'2'    ;Jump for two seat
    jz h4Two   

    cmp al,'3'    ;Jump for three seat
    jz h4Three 
    
    jmp invalid   ;For invalid input
     
 e8: 
    mov ah,9      ;To ask number of seat user want to buy
    lea dx,seat1 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for one seat
    jz e8One
    
    cmp al,'2'    ;Jump for two seat
    jz e8Two   

    cmp al,'3'    ;Jump for three seat
    jz e8Three 
    
    jmp invalid   ;For invalid input 
    
 e4: 
    mov ah,9      ;To ask number of seat user want to buy
    lea dx,seat1 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for one seat
    jz e4One
    
    cmp al,'2'    ;Jump for two seat
    jz e4Two   

    cmp al,'3'    ;Jump for three seat
    jz e4Three
    
    jmp invalid   ;For invalid input             
 
h8One: 
    mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    mov ah,9      ;For one seat of Hanif
    lea dx,h18 
    int 21h
    
    jmp more
     
h8Two:  
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For two seat of Hanif
    mov ah,9   
    lea dx,h28 
    int 21h
    
    jmp more
     
h8Three:
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit   

    ;For three seat of Hanif
    mov ah,9   
    lea dx,h38 
    int 21h
    
    jmp done
    
h4One:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit 
   
    mov ah,9      ;For one seat of Hanif
    lea dx,h14 
    int 21h
    
    jmp more
     
h4Two:  
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
            ;For two seat of Hanif
    mov ah,9   
    lea dx,h24 
    int 21h
    
    jmp more
     
h4Three:  
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For three seat of Hanif
    mov ah,9   
    lea dx,h34 
    int 21h
    
    jmp done  
           
e8One:  
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For one seat of Ena   
    mov ah,9   
    lea dx,e18 
    int 21h
    
    jmp more
     
e8Two: 
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit

    ;For two seat of Ena
    mov ah,9   
    lea dx,e28 
    int 21h
    
    jmp more
     
e8Three:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For three seat of Ena
    mov ah,9   
    lea dx,e38 
    int 21h
    
    jmp done
        
e4One:  
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit


    ;For one seat of Ena
    mov ah,9   
    lea dx,e14 
    int 21h
    
    jmp more
     
e4Two:     
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For two seat of Ena
    mov ah,9   
    lea dx,e24 
    int 21h
    
    jmp more
     
e4Three:           
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For three seat of Ena
    mov ah,9   
    lea dx,e34 
    int 21h
    
    jmp done    
       
chattagram:
       
    mov ah,9      ;To display the buses of Chattagram
    lea dx,c1
    int 21h
    lea dx,c2
    int 21h
    lea dx,c3
    int 21h
    
    mov ah,01h     ;To take choice input
    int 21h
    
    cmp al,'1'     ;Jump for starline bus
    jz starline
    
    cmp al,'2'     ;Jump for green line bus
    jz greenline    
    
    jmp invalid   ;For invalid input  
    
starline:
    mov ah,9      ;To ask time
    lea dx,time1 
    int 21h 
    lea dx,stime2 
    int 21h
    lea dx,stime3 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for 10:00
    jz s8
    
    cmp al,'2'    ;Jump for 06:00
    jz s4   

    jmp invalid   ;For invalid input  
    
greenline:
      mov ah,9      ;To ask time
    lea dx,time1 
    int 21h 
    lea dx,gtime2 
    int 21h
    lea dx,gtime3 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for 05:00
    jz g8
    
    cmp al,'2'    ;Jump for 03:00
    jz g4   
   
    jmp invalid   ;For invalid input
       
s8:
    mov ah,9       ;To ask number of seat user want to buy
    lea dx,seat1 
    int 21h  
    
    mov ah,01h     ;To take choice input
    int 21h
    
    cmp al,'1'     ;Jump for one seat
    jz s8One
    
    cmp al,'2'      ;Jump for two seat
    jz s8Two   

    cmp al,'3'       ;Jump for three seat
    jz s8Three
    
    jmp invalid   ;For invalid input
       
s4:
   mov ah,9       ;To ask number of seat user want to buy
    lea dx,seat1 
    int 21h  
    
    mov ah,01h     ;To take choice input
    int 21h
    
    cmp al,'1'     ;Jump for one seat
    jz s4One
    
    cmp al,'2'      ;Jump for two seat
    jz s4Two   

    cmp al,'3'       ;Jump for three seat
    jz s4Three
    
     jmp invalid   ;For invalid input  
      
 g8:
    mov ah,9   
    lea dx,seat1     ;To ask number of seat user want to buy
    int 21h  
    
    mov ah,01h       ;To take choice input
    int 21h
    
    cmp al,'1'       ;Jump for one seat
    jz g8One
    
    cmp al,'2'       ;Jump for two seat
    jz g8Two   

    cmp al,'3'        ;Jump for three seat
    jz g8Three
    
     jmp invalid   ;For invalid input  
      
 g4:
    mov ah,9   
    lea dx,seat1     ;To ask number of seat user want to buy
    int 21h  
    
    mov ah,01h       ;To take choice input
    int 21h
    
    cmp al,'1'       ;Jump for one seat
    jz g4One
    
    cmp al,'2'       ;Jump for two seat
    jz g4Two   

    cmp al,'3'        ;Jump for three seat
    jz g4Three
    
     jmp invalid   ;For invalid input 
       
s8One:  
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For one seat of starline   
    mov ah,9   
    lea dx,s18 
    int 21h
    
    jmp more 
    
s8Two:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
     
    ;For two seat of starline
    mov ah,9   
    lea dx,s28 
    int 21h
    
    jmp more 
    
s8Three:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For three seat of starline
    mov ah,9   
    lea dx,s38 
    int 21h
    
    jmp done
    
s4One:
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
       
    ;For one seat of starline  
    mov ah,9   
    lea dx,s14 
    int 21h
    
    jmp more
    
s4Two:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
              
    ;For two seat of starline
    mov ah,9   
    lea dx,s24 
    int 21h
    
    jmp more
    
s4Three:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
             
    ;For three seat of starline
    mov ah,9   
    lea dx,s34 
    int 21h
    
    jmp done          
      
g8One:     
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
        
    ;For one seat of greenline   
    mov ah,9   
    lea dx,g18 
    int 21h
    
    jmp more 
    
g8Two:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
                  
    ;For two seat of greenline
    mov ah,9   
    lea dx,g28 
    int 21h
    
    jmp more   
    
g8Three:  
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
       
    ;For three seat of greenline
    mov ah,9   
    lea dx,g38 
    int 21h
    
    jmp done 
    
g4One:        
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For one seat of greenline   
    mov ah,9   
    lea dx,g14 
    int 21h
    
    jmp more 
    
g4Two:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For two seat of greenline
    mov ah,9   
    lea dx,g24 
    int 21h
    
    jmp more   
    
g4Three:             
    mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
   ;For three seat of greenline
    mov ah,9   
    lea dx,g34 
    int 21h
    
    jmp done            
        
barishal:
       
    mov ah,9      ;To display the buses of barishal
    lea dx,b1
    int 21h
    lea dx,b2
    int 21h
    lea dx,b3
    int 21h
    
    mov ah,01h      ;To take choice input
    int 21h
    
    cmp al,'1'      ;Jump to select Nabil bus 
    jz nabil
    
    cmp al,'2'      ;Jump to select Dreamline bus
    jz dreamline    
    
     jmp invalid   ;For invalid input 
    
nabil:
    mov ah,9        ;To ask number of seat user want to buy
    lea dx,time1    
    int 21h   
    lea dx,ntime2    
    int 21h 
    lea dx,ntime3    
    int 21h 
    
    mov ah,01h      ;To take choice input
    int 21h
    
    cmp al,'1'      ;Jump for 11:00am
    jz n8
    
    cmp al,'2'       ;Jump for 07:00pm
    jz n4   

     jmp invalid   ;For invalid input 
     
dreamline:
     mov ah,9      ;To ask number of seat user want to buy
    lea dx,time1 
    int 21h    
    lea dx,dtime2 
    int 21h
    lea dx,dtime3 
    int 21h
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for 04:00am
    jz d8
    
    cmp al,'2'     ;Jump for 01:00pm
    jz d4   

     jmp invalid   ;For invalid input 
     
n8:
    mov ah,9        ;To ask number of seat user want to buy
    lea dx,seat1    
    int 21h  
    
    mov ah,01h      ;To take choice input
    int 21h
    
    cmp al,'1'      ;Jump for one seat
    jz n8One
    
    cmp al,'2'       ;Jump for two seat
    jz n8Two   

    cmp al,'3'        ;Jump for three seat
    jz n8Three   
    
     jmp invalid   ;For invalid input 
     
n4:
    mov ah,9        ;To ask number of seat user want to buy
    lea dx,seat1    
    int 21h  
    
    mov ah,01h      ;To take choice input
    int 21h
    
    cmp al,'1'      ;Jump for one seat
    jz n4One
    
    cmp al,'2'       ;Jump for two seat
    jz n4Two   

    cmp al,'3'        ;Jump for three seat
    jz n4Three  
    
     jmp invalid   ;For invalid input 
     
 d8:
     mov ah,9      ;To ask number of seat user want to buy
    lea dx,seat1 
    int 21h  
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for one seat
    jz d8One
    
    cmp al,'2'     ;Jump for two seat
    jz d8Two   

    cmp al,'3'      ;Jump for three seat
    jz d8Three    
    
     jmp invalid   ;For invalid input   
     
  d4:
     mov ah,9      ;To ask number of seat user want to buy
    lea dx,seat1 
    int 21h  
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'1'    ;Jump for one seat
    jz d4One
    
    cmp al,'2'     ;Jump for two seat
    jz d4Two   

    cmp al,'3'      ;Jump for three seat
    jz d4Three   
    
     jmp invalid   ;For invalid input 

n8One:  
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit   
      
    ;For one seat of nabil   
    mov ah,9   
    lea dx,n18 
    int 21h
    
    jmp more 
    
n8Two:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit     

    ;For two seat of nabil
    mov ah,9   
    lea dx,n28 
    int 21h
    
    jmp more
     
n8Three:        
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit

    ;For three seat of nabil
    mov ah,9   
    lea dx,n38 
    int 21h
    
    jmp done 
    
n4One:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit     

    ;For one seat of nabil   
    mov ah,9   
    lea dx,n14 
    int 21h
    
    jmp more 
    
n4Two:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
     
    ;For two seat of nabil
    mov ah,9   
    lea dx,n24 
    int 21h
    
    jmp more
     
n4Three:   
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit

    ;For three seat of nabil
    mov ah,9   
    lea dx,n34 
    int 21h
    
    jmp done          
      
d8One:     
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
       
    ;For one seat of dreamline
    mov ah,9   
    lea dx,d18 
    int 21h
    
    jmp more
     
d8Two:  
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For two seat of dreamline
    mov ah,9   
    lea dx,d28 
    int 21h
    
    jmp more 
    
d8Three:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
        
    ;For three seat of dreamline
    mov ah,9   
    lea dx,d38 
    int 21h
    
    jmp done  
d4One:
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit 

    ;For one seat of dreamline 
    mov ah,9   
    lea dx,d14 
    int 21h
    
    jmp more
     
d4Two:
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
         
    ;For two seat of dreamline
    mov ah,9   
    lea dx,d24 
    int 21h
    
    jmp more
    
d4Three:    
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit

    ;For three seat of dreamline
    mov ah,9   
    lea dx,d34 
    int 21h
    
    jmp done    
        
pabna:
       
    mov ah,9    ;To display the buses of pabna
    lea dx,p1
    int 21h
    lea dx,p2
    int 21h
    lea dx,p3
    int 21h
    
    mov ah,01h      ;To take choice input
    int 21h
    
    cmp al,'1'      ;Jump for unique bus
    jz unique
    
    cmp al,'2'     ;Jump for Indiana bus
    jz indiana    
    
     jmp invalid   ;For invalid input 
    
unique:
    mov ah,9   
    lea dx,time1    ;To ask number of seat user want to buy
    int 21h 
    lea dx,utime2    ;To ask number of seat user want to buy
    int 21h 
    lea dx,utime3    ;To ask number of seat user want to buy
    int 21h  
    
    mov ah,01h      ;To take choice input
    int 21h
    
    cmp al,'1'      ;Jump for 03:00am
    jz u8
    
    cmp al,'2'       ;Jump for 12:30pm
    jz u4   

     jmp invalid   ;For invalid input 
indiana:
     mov ah,9        ;To ask number of seat user want to buy
    lea dx,time1 
    int 21h   
    lea dx,itime2 
    int 21h 
    lea dx,itime3 
    int 21h 
    
    mov ah,01h       ;To take choice input
    int 21h
    
    cmp al,'1'       ;Jump for 08:00am
    jz i8
    
    cmp al,'2'        ;Jump for 3:15pm
    jz i4  

    jmp invalid   ;For invalid input 
u8:
    mov ah,9   
    lea dx,seat1    ;To ask number of seat user want to buy
    int 21h  
    
    mov ah,01h      ;To take choice input
    int 21h
    
    cmp al,'1'      ;Jump for one seat
    jz u8One
    
    cmp al,'2'       ;Jump for two seat
    jz u8Two   

    cmp al,'3'        ;Jump for three seat
    jz u8Three 
    
     jmp invalid   ;For invalid input 
u4:
    mov ah,9   
    lea dx,seat1    ;To ask number of seat user want to buy
    int 21h  
    
    mov ah,01h      ;To take choice input
    int 21h
    
    cmp al,'1'      ;Jump for one seat
    jz u4One
    
    cmp al,'2'       ;Jump for two seat
    jz u4Two   

    cmp al,'3'        ;Jump for three seat
    jz u4Three  
    
     jmp invalid   ;For invalid input 
    
i8:
    mov ah,9        ;To ask number of seat user want to buy
    lea dx,seat1 
    int 21h  
    
    mov ah,01h       ;To take choice input
    int 21h
    
    cmp al,'1'       ;Jump for one seat
    jz i8One
    
    cmp al,'2'        ;Jump for two seat
    jz i8Two   

    cmp al,'3'         ;Jump for three seat
    jz i8Three   
    
     jmp invalid   ;For invalid input 
i4:
    mov ah,9        ;To ask number of seat user want to buy
    lea dx,seat1 
    int 21h  
    
    mov ah,01h       ;To take choice input
    int 21h
    
    cmp al,'1'       ;Jump for one seat
    jz i4One
    
    cmp al,'2'        ;Jump for two seat
    jz i4Two   

    cmp al,'3'         ;Jump for three seat
    jz i4Three                 
                
     jmp invalid   ;For invalid input             
u8One:        
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit 
   
    mov ah,9        ;For one seat of unique
    lea dx,u18 
    int 21h
    
    jmp more 
    
u8Two:     
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For two seat of unique
    mov ah,9   
    lea dx,u28 
    int 21h
    
    jmp more
     
u8Three:        
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit

    ;For three seat of unique
    mov ah,9   
    lea dx,u38 
    int 21h
    
    jmp done  
u4One:  
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
   
    mov ah,9        ;For one seat of unique
    lea dx,u14 
    int 21h
    
    jmp more 
    
u4Two:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
         
    ;For two seat of unique
    mov ah,9   
    lea dx,u24 
    int 21h
    
    jmp more
     
u4Three:
      mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit

    ;For three seat of unique
    mov ah,9   
    lea dx,u34 
    int 21h
    
    jmp done         
      
i8One:
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit     

    ;For one seat of indiana   
    mov ah,9   
    lea dx,i18 
    int 21h
    
    jmp more
     
i8Two:     
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit

    ;For two seat of indiana
    mov ah,9   
    lea dx,i28 
    int 21h
    
    jmp more
     
i8Three:   
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit

    ;For three seat of indiana
    mov ah,9   
    lea dx,i38 
    int 21h
    
    jmp done  
i4One:              
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit 
     
    ;For one seat of indiana   
    mov ah,9   
    lea dx,i14 
    int 21h
    
    jmp more
     
i4Two:     
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For two seat of indiana
    mov ah,9   
    lea dx,i24 
    int 21h
    
    jmp more
     
i4Three:   
     mov ah,9      ;For confirming order
    lea dx,confirm1 
    int 21h    
    lea dx,confirm2 
    int 21h 
    lea dx,confirm3 
    int 21h   
    lea dx,confirm4 
    int 21h 
    
    mov ah,01h    ;To take choice input
    int 21h
    
    cmp al,'n'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'N'    ;Jump for ordering again
    jz chooseRoute 
    cmp al,'e'    ;Jump to exit
    jz exit
    cmp al,'E'    ;Jump to exit
    jz exit
    
    ;For three seat of indiana
    mov ah,9   
    lea dx,i34 
    int 21h
    
    jmp done     
       
invalid:   
    mov ah,9      ;invalid label
    lea dx,invalid1 
    int 21h   
    lea dx,invalid2 
    int 21h  
    lea dx,invalid3 
    int 21h  
    
    mov ah,01h    
    int 21h
    
    cmp al,'y'    
    jz chooseRoute
    cmp al,'Y'    
    jz chooseRoute
    
    cmp al,'n'
    jz exit           
    cmp al,'N'
    jz exit
    
    jmp invalid
    
more: 
    mov ah,9   
    lea dx,more1 
    int 21h   
    lea dx,more2 
    int 21h  
    lea dx,more3 
    int 21h  
    
    mov ah,01h    
    int 21h
    
    cmp al,'y'    
    jz chooseRoute  
    cmp al,'Y'    
    jz chooseRoute
    
    cmp al,'n'
    jz exit 
    cmp al,'N'
    jz exit
    
    jmp invalid
     
done: 
    mov ah,9   
    lea dx,done1 
    int 21h   
    lea dx,done2 
    int 21h  

    
    jmp exit           
             
exit:            ;exit
    mov ah,4ch
    int 21h
    main endp
end main
