<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style-4.css">
</head>
<body>
	<?php
	include('top-1.php');
	?><br>

	<div class="container">
	  	<div class="row">
	    	<div class="col-sm">
	    		<div class="container-2">
	    			<p>
	    				.model small<br>
.stack 100h<br>
.data<br>
;*****************************************************************************<br>
;                            FOR ENTRY LEVEL  <br>
;*****************************************************************************<br>
group1 db 10,13,'Computer Organization and Architecture(Section-A)'<br>
group2 db 10,13,'-------------------------------------------------$' <br>
group3 db 10,13,'-------Project: EASY TICKET, EASY TRAVEL-------- $' <br>
group4 db 10,13,'-----------------Group members:-----------------$'<br>
group5 db 10,13,'-----------SULTAN, TOFAYET_19-40385-1----------- $'<br>
group6 db 10,13,'-----------JAHAN, NUSRAT_19-40355-1------------- $'<br>
group7 db 10,13,'------------ZAMIL, AHMED_19-40400-1------------- $'<br>
group8 db 10,13,'----------TALUKDER, EHSAN_19-40370-1------------$'<br>
group9 db 10,13,'---------Instructor:MD. NAZMUL HOSSAIN---------- $' <br>
<br>
entry1 db 10,13,10,13,'***Do you want to buy ticket?*** $',<br>
entry2 db 10,13,'If yes enter y/Y  $'<br>
entry3 db 10,13,'For exit enter e/E $'<br>
  <br>
;*****************************************************************************<br>
;                            FOR CHOOSING ROUTE  <br>
;*****************************************************************************<br>
<br>
r1 db 10,13,10,13,'***You are allowed to buy max three ticket at a time*** $',<br>
r2 db 10,13,'Choose the route- $'<br>
r3 db 10,13,'Enter 1 for DHAKA to KHULNA $'<br>
r4 db 10,13,'Enter 2 for DHAKA to CHATTAGRAM$'  <br>
r5 db 10,13,'Enter 3 for DHAKA to BARISHAL $'<br>
r6 db 10,13,'Enter 4 for DHAKA to PABNA',10,13,'$'<br>
<br>
;*****************************************************************************<br>
;                        FOR CHOOSING BUS OF KHULNA<br>
;*****************************************************************************<br>
<br>
k1 db 10,13,10,13,'Choose bus of Dhaka to Khulna route- $'<br>
k2 db 10,13,'Enter 1 for HANIF-----(Per seat cost 220 tk) $'<br>
k3 db 10,13,'Enter 2 for ENA-------(Per seat cost 180 tk)  ',10,13,'$' <br>
<br>
<br>
;*****************************************************************************<br>
;                      FOR CHOOSING BUS OF CHATTAGRAM<br>
;***************************************************************************** <br>
  <br>
c1 db 10,13,10,13,'Choose bus of Dhaka to Chattagram route- $'<br>
c2 db 10,13,'Enter 1 for STAR LINE----(Perseat cost 230) $'<br>
c3 db 10,13,'Enter 2 for GREEN LINE---(Per seat cost 260) ',10,13,'$' <br>
<br>
 <br>
;*****************************************************************************<br>
;                       FOR CHOOSING BUS OF BARISHAL<br>
;***************************************************************************** <br>
<br>
b1 db 10,13,10,13,'Choose bus of Dhaka to Barishal route- $'<br>
b2 db 10,13,'Enter 1 for Nabil-----(Per seat cost 120 tk) $'<br>
b3 db 10,13,'Enter 2 for Dream line-------(Per seat cost 180 tk)  ',10,13,'$' <br>
<br>
<br>
;*****************************************************************************<br>
;                         FOR CHOOSING BUS OF PABNA<br>
;*****************************************************************************   <br>
p1 db 10,13,10,13,'Choose bus of Dhaka to Pabna route- $'<br>
p2 db 10,13,'Enter 1 for Unique----(Perseat cost 130) $'<br>
p3 db 10,13,'Enter 2 for Indiana---(Per seat cost 220) ',10,13,'$'   <br>
<br>
<br>
;*****************************************************************************<br>
;                         FOR CHOOSING Time<br>
;*****************************************************************************   <br>
time1 db 10,13,10,13,'Choose time of bus- $'   <br>
<br>
;------------------------------TIME OF HANIF BUS------------------------------<br>
htime2 db 10,13,'Enter 1 for 8:30am $'<br>
htime3 db 10,13,'Enter 2 for 4:30pm',10,13,'$'<br>
<br>
;------------------------------TIME OF ENA BUS------------------------------<br>
etime2 db 10,13,'Enter 1 for 9:30am $'<br>
etime3 db 10,13,'Enter 2 for 5:30pm',10,13,'$'<br>
<br><br><br>
;------------------------------TIME OF STARLINE BUS------------------------------<br><br>
stime2 db 10,13,'Enter 1 for 10:00am $'<br>
stime3 db 10,13,'Enter 2 for 06:00pm',10,13,'$' <br>
<br>
;------------------------------TIME OF GREEN LINE BUS------------------------------<br>
gtime2 db 10,13,'Enter 1 for 05:00am $'<br>
gtime3 db 10,13,'Enter 2 for 03:00pm',10,13,'$' <br>
<br>
;------------------------------TIME OF NABIL BUS------------------------------<br>
ntime2 db 10,13,'Enter 1 for 11:00am $'<br>
ntime3 db 10,13,'Enter 2 for 07:00pm',10,13,'$'  <br>
<br>
;------------------------------TIME OF DREAM LINE BUS------------------------------<br>
dtime2 db 10,13,'Enter 1 for 04:00am $'<br>
dtime3 db 10,13,'Enter 2 for 01:00pm',10,13,'$'  <br>
<br>
;------------------------------TIME OF UNIQUE BUS------------------------------<br>
utime2 db 10,13,'Enter 1 for 03:00am $'<br>
utime3 db 10,13,'Enter 2 for 12:30pm',10,13,'$'<br>
<br>
;------------------------------TIME OF INDIANA BUS------------------------------<br>
itime2 db 10,13,'Enter 1 for 08:00am $'<br>
itime3 db 10,13,'Enter 2 for 03:15pm',10,13,'$'<br>
<br>
seat1 db 10,13,10,13,'How many seat you want to buy(MAX-3 allowed): $';NUMBER OF SEAT  <br>
<br>
 <br>
;*****************************************************************************<br>
;                  RECEIPT AFTER CHOOSING NUMBER OF SEATS<br>
;*****************************************************************************<br>
<br>
;------------------------------RECEIPT OF HANIF BUS------------------------------<br>
h18 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:08:30am',10,13,'Total cost=1*220',10,13,'220 tk $'<br>
h28 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:08:30am',10,13,'Total cost=2*220',10,13,'440 tk $'<br>
h38 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:08:30am',10,13,'Total cost=3*220',10,13,'660 tk $' <br>     
<br>
;------------------------------RECEIPT OF HANIF BUS------------------------------<br>
h14 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:04:30pm',10,13,'Total cost=1*220',10,13,'220 tk $'<br>
h24 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:04:30pm',10,13,'Total cost=2*220',10,13,'440 tk $'<br>
h34 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Hanif',10,13,'Time:04:30pm',10,13,'Total cost=3*220',10,13,'660 tk $'                <br>                                                                                           
            <br>                                                                                              
;------------------------------RECEIPT OF ENA BUS------------------------------<br>
e18 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:09:30am',10,13,'Total cost=1*180',10,13,'180 tk $'<br>
e28 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:09:30am',10,13,'Total cost=2*180',10,13,'360 tk $'<br>
e38 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:09:30am',10,13,'Total cost=3*180',10,13,'540 tk $'<br> 
<br>
;------------------------------RECEIPT OF ENA BUS------------------------------<br>
e14 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:05:30pm',10,13,'Total cost=1*180',10,13,'180 tk $'<br>
e24 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:05:30pm',10,13,'Total cost=2*180',10,13,'360 tk $'<br>
e34 db 10,13,10,13,'Route:Dhaka to Khulna',10,13,'Bus:Ena',10,13,'Time:05:30pm',10,13,'Total cost=3*180',10,13,'540 tk $'                         <br>                                                                                    
                    <br>                                                                                                                                                                                                                                                             
;------------------------------RECEIPT OF STARLINE BUS------------------------------     <br>                                                                                                 <br>
s18 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:10:00am',10,13,'Total cost=1*230',10,13,'230 tk $'<br>
s28 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:10:00am',10,13,'Total cost=2*230',10,13,'460 tk $'<br>
s38 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:10:00am',10,13,'Total cost=3*230',10,13,'690 tk $'<br> 
<br>
;------------------------------RECEIPT OF STARLINE BUS------------------------------<br>
s14 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:06:00pm',10,13,'Total cost=1*230',10,13,'230 tk $'<br>
s24 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:06:00pm',10,13,'Total cost=2*230',10,13,'460 tk $'<br>
s34 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:STAR LINE',10,13,'Time:06:00pm',10,13,'Total cost=3*230',10,13,'690 tk $'<br> 

;------------------------------RECEIPT OF GREENLINE BUS------------------------------  <br>
g18 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:05:00am',10,13,'Total cost=1*260',10,13,'260 tk $'<br>
g28 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:05:00am',10,13,'Total cost=2*260',10,13,'520 tk $'<br>
g38 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:05:00am',10,13,'Total cost=3*260',10,13,'780 tk $'<br>
<br>
;------------------------------RECEIPT OF GREENLINE BUS------------------------------<br>
g14 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:03:00pm',10,13,'Total cost=1*260',10,13,'260 tk $'<br>
g24 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:03:00pm',10,13,'Total cost=2*260',10,13,'520 tk $'<br>
g34 db 10,13,10,13,'Route:Dhaka to Chattagram',10,13,'Bus:GREEN LINE',10,13,'Time:03:00pm',10,13,'Total cost=3*260',10,13,'780 tk $'<br>
                                                                                                      <br>                             
;------------------------------RECEIPT OF NABIL BUS------------------------------     <br>                                                                                                                                         <br>                                                                                                                      <br>
n18 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:11:00am',10,13,'Total cost=1*120',10,13,'120 tk $'<br>
n28 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:11:00am',10,13,'Total cost=2*120',10,13,'240 tk $'<br>
n38 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:11:00am',10,13,'Total cost=3*120',10,13,'360 tk $' <br>     
<br>
;------------------------------RECEIPT OF NABIL BUS------------------------------<br>
n14 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:07:00pm',10,13,'Total cost=1*120',10,13,'120 tk $'<br>
n24 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:07:00pm',10,13,'Total cost=2*120',10,13,'240 tk $'<br>
n34 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Nabil',10,13,'Time:07:00pm',10,13,'Total cost=3*120',10,13,'360 tk $' <br> 
<br>
;------------------------------RECEIPT OF DREAM LINE BUS------------------------------<br>
d18 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:4:00am',10,13,'Total cost=1*180',10,13,'180 tk $'<br>
d28 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:4:00am',10,13,'Total cost=2*180',10,13,'360 tk $'<br>
d38 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:4:00am',10,13,'Total cost=3*180',10,13,'540 tk $'    <br>
<br>
;------------------------------RECEIPT OF DREAM LINE BUS------------------------------<br>
d14 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:1:00pm',10,13,'Total cost=1*180',10,13,'180 tk $'<br>
d24 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:1:00pm',10,13,'Total cost=2*180',10,13,'360 tk $'<br>
d34 db 10,13,10,13,'Route:Dhaka to Barishal',10,13,'Bus:Dream line',10,13,'Time:1:00pm',10,13,'Total cost=3*180',10,13,'540 tk $'<br>   
<br>
;------------------------------RECEIPT OF UNIQUE BUS------------------------------<br>
u18 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:03:00am',10,13,'Total cost=1*130',10,13,'130 tk $'<br>
u28 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:03:00am',10,13,'Total cost=2*130',10,13,'260 tk $'<br>
u38 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:03:00am',10,13,'Total cost=3*130',10,13,'390 tk $' <br>    
<br>
;------------------------------RECEIPT OF UNIQUE BUS------------------------------<br>
u14 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:12:30pm',10,13,'Total cost=1*130',10,13,'130 tk $'<br>
u24 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:12:30pm',10,13,'Total cost=2*130',10,13,'260 tk $'<br>
u34 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Unique',10,13,'Time:12:30pm',10,13,'Total cost=3*130',10,13,'390 tk $' <br>
     <br>
;------------------------------RECEIPT OF INDIANA BUS------------------------------     <br>
i18 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:08:00am',10,13,'Total cost=1*220',10,13,'220 tk $'<br>
i28 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:08:00am',10,13,'Total cost=2*220',10,13,'440 tk $'<br>
i38 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:08:00am',10,13,'Total cost=3*220',10,13,'360 tk $'<br>   

;------------------------------RECEIPT OF INDIANA BUS------------------------------<br>
i14 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:03:15pm',10,13,'Total cost=1*220',10,13,'220 tk $'<br>
i24 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:03:15pm',10,13,'Total cost=2*220',10,13,'440 tk $'<br>
i34 db 10,13,10,13,'Route:Dhaka to Pabna',10,13,'Bus:Indiana',10,13,'Time:03:15pm',10,13,'Total cost=3*220',10,13,'360 tk $'<br>
       <br>
;*****************************************************************************<br>
;                  TO ORDER AGAIN/INVALID LEVEL/FINAL DECISION<br>
;***************************************************************************** <br>
<br>
;------------------------------FOR CONFIRMATION------------------------------<br>
confirm1 db 10,13,10,13,'Are you sure to confirm order $'<br>
confirm2 db 10,13,'If you are confirm enter-y/Y $'<br>
confirm3 db 10,13,'If you want to order something new enter-n/N$' <br>
confirm4 db 10,13,'If you want to exit from application enter-e/E',10,13,'$' <br>
<br>
;------------------------------FOR INVALID LEVEL------------------------------<br>
invalid1 db 10,13,10,13,'Given an invalid input $'<br>
invalid2 db 10,13,'If you want to buy ticket enter-y/Y $'<br>
invalid3 db 10,13,'Otherwise for exit enter-n/N',10,13,'$'  <br>
<br>
;------------------------------FOR ORDERING MORE------------------------------<br>
more1 db 10,13,10,13,'Still interested to buy ticket?$'<br>
more2 db 10,13,'If you want to buy ticket enter-y/Y $'<br>
more3 db 10,13,'Otherwise for exit enter-n/N',10,13,' $'   <br>
<br>
;------------------------------FOR FINAL TASK------------------------------<br>
done1 db 10,13,10,13,'Order done(Bought 3 ticket which is max limit) $'<br>
done2 db 10,13,'Thank you for using "EASY TICKET, EASY TRAVEL$' <br>      
            <br>   
	    			</p>
	    		</div><br>
	    		<div class="container-3">
	    			<p>
	    				.code<br>
main proc<br>
    mov ax,@data  ;To initialize data segment<br>
    mov ds,ax <br>
     <br>
    mov ah,9     ;To display entry portion<br>
    lea dx,group1 <br>
    int 21h<br>
    lea dx,group2 <br>
    int 21h <br>
    lea dx,group9 <br>
    int 21h <br>
    lea dx,group3 <br>
    int 21h  <br>
    lea dx,group4 <br>
    int 21h <br>
    lea dx,group5 <br>
    int 21h<br>
    lea dx,group6 <br>
    int 21h <br>
    lea dx,group7 <br>
    int 21h <br>
    lea dx,group8 <br>
    int 21h<br>
    lea dx,group2 <br>
    int 21h<br>
    int 21h  <br>
    <br>
    <br>
Entry:  <br>
      mov ah,9     ;To display all the route available<br>
    lea dx,entry1 <br>
    int 21h<br>
    lea dx,entry2 <br>
    int 21h<br>
    lea dx,entry3 <br>
    int 21h <br>
   <br>
    <br>
    <br>
    mov ah,01h    ;To take the input choice<br>
    int 21h<br>
    <br>
    cmp al,'y'    ;One to buy ticket<br>
    jz chooseRoute   <br>
    cmp al,'Y'    <br>
    jz chooseRoute<br>
    <br>
    cmp al,'e'    ;Two for exit <br>
    jz exit  <br>
    cmp al,'E'   <br>
    jz exit      
    <br>
    jmp invalid   ;For invalid input  <br>
    <br>
<br>
chooseRoute:    <br>
    mov ah,9     ;To display all the route available<br>
    lea dx,r1 <br>
    int 21h<br>
    lea dx,r2 <br>
    int 21h<br>
    lea dx,r3 <br>
    int 21h <br>
    lea dx,r4 <br>
    int 21h    <br>
    lea dx,r5 <br>
    int 21h <br>
    lea dx,r6 <br>
    int 21h<br>
    <br>
    <br>
    mov ah,01h    ;To take the input choice of the user<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;One for Khulna<br>
    jz khulna<br>
    <br>
    cmp al,'2'<br>
    jz chattagram ;Two for Chattagram <br>
    <br>
    cmp al,'3'<br>
    jz barishal   ;Three for Barishal<br>
    <br>
    cmp al,'4'    ;Four for Pabna<br>
    jz pabna <br>
    <br>
    jmp invalid   ;For invalid input<br>
        <br>
 <br>
	    			</p>
	    		</div><br>
	    		<div class="container-3">
	    			<p>
	    				khulna:          <br>
    mov ah,9      ;To display the available bus of Khulna<br>
    lea dx,k1 <br>
    int 21h   <br>
    lea dx,k2 <br>
    int 21h <br>
    lea dx,k3 <br>
    int 21h<br>
    <br>
    mov ah,01h    ;To take the choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;One for Hanif<br>
    jz hanif<br>
    <br>
    cmp al,'2'    ;Two for Ena<br>
    jz ena<br>
    <br>
    jmp invalid   ;For invalid input<br>
    <br>
hanif: <br>
    mov ah,9      ;To ask time<br>
    lea dx,time1 <br>
    int 21h <br>
    lea dx,htime2 <br>
    int 21h<br>
    lea dx,htime3 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for 8:30am<br>
    jz h8<br>
    <br>
    cmp al,'2'    ;Jump for 4:30pm<br>
    jz h4   <br>
<br>
    jmp invalid   ;For invalid input<br>
    <br>
ena: <br>
    mov ah,9      ;To ask time<br>
    lea dx,time1 <br>
    int 21h <br>
    lea dx,etime2 <br>
    int 21h<br>
    lea dx,etime3 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for 9:30am<br>
    jz e8<br>
    <br>
    cmp al,'2'    ;Jump for 5:30pm<br>
    jz e4  <br>
    <br>
    jmp invalid   ;For invalid input <br>
<br>
h8: <br>
    mov ah,9      ;To ask number of seat userwant to buy<br>
    lea dx,seat1 <br>
    int 21h  <br>
    <br>
    mov ah,01h    ;To take choice inp<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for one seat<br>
    jz h8One<br>
    <br>
    cmp al,'2'    ;Jump for two seat<br>
    jz h8Two   <br>
<br>
    cmp al,'3'    ;Jump for three seat<br>
    jz h8Three  <br>
    <br>
    jmp invalid   ;For invalid input <br>
    <br>
h4: <br>
    mov ah,9      ;To ask number of seat user want to buy<br>
    lea dx,seat1 <br>
    int 21h  <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for one seat<br>
    jz h4One<br>
    <br>
    cmp al,'2'    ;Jump for two seat<br>
    jz h4Two   <br>
<br>
    cmp al,'3'    ;Jump for three seat<br>
    jz h4Three <br>
    <br>
    jmp invalid   ;For invalid input<br>
     <br>
 e8: <br>
    mov ah,9      ;To ask number of seat user want to buy<br>
    lea dx,seat1 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for one seat<br>
    jz e8One<br>
    <br>
    cmp al,'2'    ;Jump for two seat<br>
    jz e8Two   <br>
<br>
    cmp al,'3'    ;Jump for three seat<br>
    jz e8Three <br>
    <br>
    jmp invalid   ;For invalid input <br>
    <br>
 e4: <br>
    mov ah,9      ;To ask number of seat user want to buy<br>
    lea dx,seat1 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for one seat<br>
    jz e4One<br>
    <br>
    cmp al,'2'    ;Jump for two seat<br>
    jz e4Two   <br>
<br>
    cmp al,'3'    ;Jump for three seat<br>
    jz e4Three<br>
    <br>
    jmp invalid   ;For invalid input    <br>         
 <br>
h8One: <br>
    mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br><br>
    <br><br>
    mov ah,01h    ;To take choice input<br><br>
    int 21h<br><br>
    <br><br>
    cmp al,'n'    ;Jump for ordering again<br><br>
    jz chooseRoute <br><br>
    cmp al,'N'    ;Jump for ordering again<br><br>
    jz chooseRoute <br><br>
    cmp al,'e'    ;Jump to exit<br><br>
    jz exit<br><br>
    cmp al,'E'    ;Jump to exit<br><br>
    jz exit<br><br>
    <br><br>
    mov ah,9      ;For one seat of Hanif<br><br>
    lea dx,h18 <br><br>
    int 21h<br><br>
    <br><br>
    jmp more<br><br>
     <br><br>
h8Two:  <br><br>
      mov ah,9      ;For confirming order<br><br>
    lea dx,confirm1 <br><br>
    int 21h  <br><br>  
    lea dx,confirm2 <br><br>
    int 21h <br><br>
    lea dx,confirm3 <br><br>
    int 21h   <br><br>
    lea dx,confirm4 <br><br>
    int 21h <br><br>
    <br><br>
    mov ah,01h    ;To take choice input<br><br>
    int 21h<br><br>
    <br><br>
    cmp al,'n'    ;Jump for ordering again<br><br>
    jz chooseRoute <br><br>
    cmp al,'N'    ;Jump for ordering again<br><br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For two seat of Hanif<br>
    mov ah,9   <br>
    lea dx,h28 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
h8Three:<br>
      mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit   <br>
<br>
    ;For three seat of Hanif<br>
    mov ah,9   <br>
    lea dx,h38 <br>
    int 21h<br>
    <br>
    jmp done<br>
    <br>
h4One:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit <br>
   <br>
    mov ah,9      ;For one seat of Hanif<br>
    lea dx,h14 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
h4Two:  <br>
      mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
            ;For two seat of Hanif<br>
    mov ah,9   <br>
    lea dx,h24 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
h4Three:  <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For three seat of Hanif<br>
    mov ah,9   <br>
    lea dx,h34<br> 
    int 21h<br>
    <br>
    jmp done  <br>
           <br>
e8One:  <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For one seat of Ena  <br> 
    mov ah,9   <br>
    lea dx,e18 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
e8Two: <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
<br>
    ;For two seat of Ena<br>
    mov ah,9   <br>
    lea dx,e28 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
e8Three:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    
    ;For three seat of Ena<br>
    mov ah,9   <br>
    lea dx,e38 <br>
    int 21h<br>
    <br>
    jmp done<br>
        <br>
e4One:  <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
<br>
<br>
    ;For one seat of Ena<br>
    mov ah,9   <br>
    lea dx,e14 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
e4Two:     <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For two seat of Ena<br>
    mov ah,9   <br>
    lea dx,e24 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
e4Three:      <br>     
      mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For three seat of Ena<br>
    mov ah,9   <br>
    lea dx,e34 <br>
    int 21h<br>
    <br>
    jmp done    <br>
       <br>
	    			</p>
	    		</div><br>
	    		<div class="container-3">
	    			<p>
	    				chattagram:<br>
       <br>
    mov ah,9      ;To display the buses of Chattagram<br>
    lea dx,c1<br>
    int 21h<br>
    lea dx,c2<br>
    int 21h<br>
    lea dx,c3<br>
    int 21h<br>
    <br>
    mov ah,01h     ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'     ;Jump for starline bus<br>
    jz starline<br>
    <br>
    cmp al,'2'     ;Jump for green line bus<br>
    jz greenline    <br>
    <br>
    jmp invalid   ;For invalid input  <br>
    <br>
starline:<br>
    mov ah,9      ;To ask time<br>
    lea dx,time1 <br>
    int 21h <br>
    lea dx,stime2 <br>
    int 21h<br>
    lea dx,stime3 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for 10:00<br>
    jz s8<br>
    <br>
    cmp al,'2'    ;Jump for 06:00<br>
    jz s4   <br>
<br>
    jmp invalid   ;For invalid input  <br>
    <br>
greenline:<br>
      mov ah,9      ;To ask time<br>
    lea dx,time1 <br>
    int 21h <br>
    lea dx,gtime2 <br>
    int 21h<br>
    lea dx,gtime3 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for 05:00<br>
    jz g8<br>
    <br>
    cmp al,'2'    ;Jump for 03:00<br>
    jz g4   <br>
   <br>
    jmp invalid   ;For invalid input<br>
       
s8:<br>
    mov ah,9       ;To ask number of seat user want to buy<br>
    lea dx,seat1 <br>
    int 21h<br>
    <br>
    mov ah,01h     ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'     ;Jump for one seat<br>
    jz s8One<br>
    <br>
    cmp al,'2'      ;Jump for two seat<br>
    jz s8Two   <br>
<br>
    cmp al,'3'       ;Jump for three seat<br>
    jz s8Three<br>
    <br>
    jmp invalid   ;For invalid input<br>
       <br>
s4:<br>
   mov ah,9       ;To ask number of seat user want to buy<br>
    lea dx,seat1 <br>
    int 21h  <br>
    <br>
    mov ah,01h     ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'     ;Jump for one seat<br>
    jz s4One<br>
    <br>
    cmp al,'2'      ;Jump for two seat<br>
    jz s4Two   <br>
<br>
    cmp al,'3'       ;Jump for three seat<br>
    jz s4Three<br>
    <br>
     jmp invalid   ;For invalid input  <br>
      <br>
 g8:<br>
    mov ah,9   <br>
    lea dx,seat1     ;To ask number of seat user want to buy<br>
    int 21h  <br>
    <br>
    mov ah,01h       ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'       ;Jump for one seat<br>
    jz g8One<br>
    <br>
    cmp al,'2'       ;Jump for two seat<br>
    jz g8Two   <br>
<br>
    cmp al,'3'        ;Jump for three seat<br>
    jz g8Three<br>
    <br>
     jmp invalid   ;For invalid input  <br>
      <br>
 g4:<br>
    mov ah,9   <br>
    lea dx,seat1     ;To ask number of seat user want to buy<br>
    int 21h  <br>
    <br>
    mov ah,01h       ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'       ;Jump for one seat<br>
    jz g4One<br>
    <br>
    cmp al,'2'       ;Jump for two seat<br>
    jz g4Two   <br>
<br>
    cmp al,'3'        ;Jump for three seat<br>
    jz g4Three<br>
    <br>
     jmp invalid   ;For invalid input <br>
       <br>
s8One:  <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h  <br>
    lea dx,confirm4<br> 
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For one seat of starline   <br>
    mov ah,9   <br>
    lea dx,s18 <br>
    int 21h<br>
    <br>
    jmp more <br>
    <br>
s8Two:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
     <br>
    ;For two seat of starline<br>
    mov ah,9   <br>
    lea dx,s28 <br>
    int 21h<br>
    <br>
    jmp more <br>
    <br>
s8Three:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h  <br> 
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For three seat of starline<br>
    mov ah,9   <br>
    lea dx,s38 <br>
    int 21h<br>
    <br>
    jmp done<br>
    <br>
s4One:<br>
      mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h  <br>  
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h  <br> 
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
       <br>
    ;For one seat of starline  <br>
    mov ah,9   <br>
    lea dx,s14 <br>
    int 21h<br>
    <br>
    jmp more<br>
    <br>
s4Two:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h  <br> 
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
             <br> 
    ;For two seat of starline<br>
    mov ah,9   <br>
    lea dx,s24 <br>
    int 21h<br>
    <br>
    jmp more<br>
    <br>
s4Three:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
             <br>
    ;For three seat of starline<br>
    mov ah,9   <br>
    lea dx,s34 <br>
    int 21h<br>
    <br>
    jmp done    <br>      
      <br>
g8One:     <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h  <br>  
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
        <br>
    ;For one seat of greenline <br>  
    mov ah,9   <br>
    lea dx,g18<br> 
    int 21h<br>
    <br>
    jmp more <br>
    <br>
g8Two:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
                 <br> 
    ;For two seat of greenline<br>
    mov ah,9   <br>
    lea dx,g28 <br>
    int 21h<br>
    <br>
    jmp more   <br>
    <br>
g8Three:  <br>
      mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
       <br>
    ;For three seat of greenline<br>
    mov ah,9   <br>
    lea dx,g38 <br>
    int 21h<br>
    <br>
    jmp done <br>
    <br>
g4One:    <br>    
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For one seat of greenline  <br> 
    mov ah,9   <br>
    lea dx,g14 <br>
    int 21h<br>
    <br>
    jmp more <br>
    <br>
g4Two:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For two seat of greenline<br>
    mov ah,9   <br>
    lea dx,g24 <br>
    int 21h<br>
    <br>
    jmp more   <br>
    <br>
g4Three:         <br>    
    mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
   ;For three seat of greenline<br>
    mov ah,9   <br>
    lea dx,g34 <br>
    int 21h<br>
    <br>
    jmp done            <br>
        <br>
	    			</p>
	    		</div><br>
	    		<div class="container-3">
	    			<p>
	    				barishal:<br>
       <br>
    mov ah,9      ;To display the buses of barishal<br>
    lea dx,b1<br>
    int 21h<br>
    lea dx,b2<br>
    int 21h<br>
    lea dx,b3<br>
    int 21h<br>
    <br>
    mov ah,01h      ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'      ;Jump to select Nabil bus <br>
    jz nabil<br>
    <br>
    cmp al,'2'      ;Jump to select Dreamline bus<br>
    jz dreamline    <br>
    <br>
     jmp invalid   ;For invalid input <br>
    <br>
nabil:<br>
    mov ah,9        ;To ask number of seat user want to buy<br>
    lea dx,time1    <br>
    int 21h   <br>
    lea dx,ntime2    <br>
    int 21h <br>
    lea dx,ntime3    <br>
    int 21h <br>
    <br>
    mov ah,01h      ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'      ;Jump for 11:00am<br>
    jz n8<br>
    <br>
    cmp al,'2'       ;Jump for 07:00pm<br>
    jz n4   <br>
<br>
     jmp invalid   ;For invalid input <br>
     <br>
dreamline:<br>
     mov ah,9      ;To ask number of seat user want to buy<br>
    lea dx,time1 <br>
    int 21h    <br>
    lea dx,dtime2 <br>
    int 21h<br>
    lea dx,dtime3 <br>
    int 21h<br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for 04:00am<br>
    jz d8<br>
    <br>
    cmp al,'2'     ;Jump for 01:00pm<br>
    jz d4   <br>
<br>
     jmp invalid   ;For invalid input <br>
     <br>
n8:<br>
    mov ah,9        ;To ask number of seat user want to buy<br>
    lea dx,seat1    <br>
    int 21h  <br>
    <br>
    mov ah,01h      ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'      ;Jump for one seat<br>
    jz n8One<br>
    <br>
    cmp al,'2'       ;Jump for two seat<br>
    jz n8Two   <br>
<br>
    cmp al,'3'        ;Jump for three seat<br>
    jz n8Three   <br>
    <br>
     jmp invalid   ;For invalid input <br>
     <br>
n4:<br>
    mov ah,9        ;To ask number of seat user want to buy<br>
    lea dx,seat1    <br>
    int 21h  <br>
    <br>
    mov ah,01h      ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'      ;Jump for one seat<br>
    jz n4One<br>
    <br>
    cmp al,'2'       ;Jump for two seat<br>
    jz n4Two   <br>
<br>
    cmp al,'3'        ;Jump for three seat<br>
    jz n4Three  <br>
    <br>
     jmp invalid   ;For invalid input <br>
     <br>
 d8:<br>
     mov ah,9      ;To ask number of seat user want to buy<br>
    lea dx,seat1 <br>
    int 21h  <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for one seat<br>
    jz d8One<br>
    <br>
    cmp al,'2'     ;Jump for two seat<br>
    jz d8Two   <br>
<br>
    cmp al,'3'      ;Jump for three seat<br>
    jz d8Three    <br>
    <br>
     jmp invalid   ;For invalid input   <br>
     <br>
  d4:<br>
     mov ah,9      ;To ask number of seat user want to buy<br>
    lea dx,seat1 <br>
    int 21h  <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'    ;Jump for one seat<br>
    jz d4One<br>
    <br>
    cmp al,'2'     ;Jump for two seat<br>
    jz d4Two   <br>
<br>
    cmp al,'3'      ;Jump for three seat<br>
    jz d4Three   <br>
    <br>
     jmp invalid   ;For invalid input <br>
<br>
n8One:  <br>
      mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit   <br>
      <br>
    ;For one seat of nabil   <br>
    mov ah,9   <br>
    lea dx,n18 <br>
    int 21h<br>
    <br>
    jmp more <br>
    <br>
n8Two:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit     <br>
<br>
    ;For two seat of nabil<br>
    mov ah,9   <br>
    lea dx,n28 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
n8Three:       <br> 
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
<br>
    ;For three seat of nabil<br>
    mov ah,9   <br>
    lea dx,n38 <br>
    int 21h<br>
    <br>
    jmp done <br>
    <br>
n4One:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx, confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit     <br>
<br>
    ;For one seat of nabil   <br>
    mov ah,9   <br>
    lea dx,n14 <br>
    int 21h<br>
    <br>
    jmp more <br>
    <br>
n4Two: <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
     <br>
    ;For two seat of nabil<br>
    mov ah,9   <br>
    lea dx,n24 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
n4Three:   <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
<br>
    ;For three seat of nabil<br>
    mov ah,9   <br>
    lea dx,n34 <br>
    int 21h<br>
    <br>
    jmp done          <br>
      <br>
d8One:     <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
       <br>
    ;For one seat of dreamline<br>
    mov ah,9   <br>
    lea dx,d18 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
d8Two:  <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For two seat of dreamline<br>
    mov ah,9   <br>
    lea dx,d28 <br>
    int 21h<br>
    <br>
    jmp more <br>
    <br>
d8Three:
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
        <br>
    ;For three seat of dreamline<br>
    mov ah,9   <br>
    lea dx,d38 <br>
    int 21h<br>
    <br>
    jmp done  <br>
d4One:<br>
      mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit <br>
<br>
    ;For one seat of dreamline <br>
    mov ah,9   <br>
    lea dx,d14 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
d4Two:<br>
      mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
         <br>
    ;For two seat of dreamline<br>
    mov ah,9   <br>
    lea dx,d24 <br>
    int 21h<br>
    <br>
    jmp more<br>
    <br>
d4Three:    <br>
      mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
<br>
    ;For three seat of dreamline<br>
    mov ah,9   <br>
    lea dx,d34 <br>
    int 21h<br>
    <br>
    jmp done    <br>
        <br>
	    			</p>
	    		</div><br>
	    		<div class="container-3">
	    			<p>
	    				pabna:<br>
       <br>
    mov ah,9    ;To display the buses of pabna<br>
    lea dx,p1<br>
    int 21h<br>
    lea dx,p2<br>
    int 21h<br>
    lea dx,p3<br>
    int 21h<br>
    <br>
    mov ah,01h      ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'      ;Jump for unique bus<br>
    jz unique<br>
    <br>
    cmp al,'2'     ;Jump for Indiana bus<br>
    jz indiana    <br>
    <br>
     jmp invalid   ;For invalid input <br>
    <br>
unique:<br>
    mov ah,9   <br>
    lea dx,time1    ;To ask number of seat user want to buy<br>
    int 21h <br>
    lea dx,utime2    ;To ask number of seat user want to buy<br>
    int 21h <br>
    lea dx,utime3    ;To ask number of seat user want to buy<br>
    int 21h  <br>
    <br>
    mov ah,01h      ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'      ;Jump for 03:00am<br>
    jz u8<br>
    <br>
    cmp al,'2'       ;Jump for 12:30pm<br>
    jz u4   <br>
<br>
     jmp invalid   ;For invalid input <br>
indiana:<br>
     mov ah,9        ;To ask number of seat user want to buy<br>
    lea dx,time1 <br>
    int 21h   <br>
    lea dx,itime2 <br>
    int 21h <br>
    lea dx,itime3 <br>
    int 21h <br>
    <br>
    mov ah,01h       ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'       ;Jump for 08:00am<br>
    jz i8<br>
    <br>
    cmp al,'2'        ;Jump for 3:15pm<br>
    jz i4  <br>
<br>
    jmp invalid   ;For invalid input <br>
u8:<br>
    mov ah,9   <br>
    lea dx,seat1    ;To ask number of seat user want to buy<br>
    int 21h  <br>
    <br>
    mov ah,01h      ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'      ;Jump for one seat<br>
    jz u8One<br>
    <br>
    cmp al,'2'       ;Jump for two seat<br>
    jz u8Two   <br>
<br>
    cmp al,'3'        ;Jump for three seat<br>
    jz u8Three <br>
    <br>
     jmp invalid   ;For invalid input <br>
u4:<br>
    mov ah,9   <br>
    lea dx,seat1    ;To ask number of seat user want to buy<br>
    int 21h  <br>
    <br>
    mov ah,01h      ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'      ;Jump for one seat<br>
    jz u4One<br>
    <br>
    cmp al,'2'       ;Jump for two seat<br>
    jz u4Two   <br>
<br>
    cmp al,'3'        ;Jump for three seat<br>
    jz u4Three  <br>
    <br>
     jmp invalid   ;For invalid input <br>
    <br>
i8:<br>
    mov ah,9        ;To ask number of seat user want to buy<br>
    lea dx,seat1 <br>
    int 21h  <br>
    <br>
    mov ah,01h       ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'       ;Jump for one seat<br>
    jz i8One<br>
    <br>
    cmp al,'2'        ;Jump for two seat<br>
    jz i8Two   <br>
<br>
    cmp al,'3'         ;Jump for three seat<br>
    jz i8Three   <br>
    <br>
     jmp invalid   ;For invalid input <br>
i4:<br>
    mov ah,9        ;To ask number of seat user want to buy<br>
    lea dx,seat1 <br>
    int 21h  <br>
    <br>
    mov ah,01h       ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'1'       ;Jump for one seat<br>
    jz i4One<br>
    <br>
    cmp al,'2'        ;Jump for two seat<br>
    jz i4Two   <br>
<br>
    cmp al,'3'         ;Jump for three seat<br>
    jz i4Three                 <br>
                <br>
     jmp invalid   ;For invalid input  <br>           
u8One:        <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit <br>
   <br>
    mov ah,9        ;For one seat of unique<br>
    lea dx,u18 <br>
    int 21h<br>
    <br>
    jmp more <br>
    <br>
u8Two:     <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For two seat of unique<br>
    mov ah,9   <br>
    lea dx,u28 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
u8Three:        <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
<br>
    ;For three seat of unique<br>
    mov ah,9   <br>
    lea dx,u38 <br>
    int 21h<br>
    <br>
    jmp done  <br>
u4One:  <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
   <br>
    mov ah,9        ;For one seat of unique<br>
    lea dx,u14 <br>
    int 21h<br>
    <br>
    jmp more <br>
    <br>
u4Two:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
         <br>
    ;For two seat of unique<br>
    mov ah,9   <br>
    lea dx,u24 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
u4Three:<br>
      mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
<br>
    ;For three seat of unique<br>
    mov ah,9   <br>
    lea dx,u34 <br>
    int 21h<br>
    <br>
    jmp done         <br>
      <br>
i8One:<br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit     <br>
<br>
    ;For one seat of indiana   <br>
    mov ah,9   <br>
    lea dx,i18 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
i8Two:     <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
<br>
    ;For two seat of indiana<br>
    mov ah,9   <br>
    lea dx,i28 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
i8Three:   <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
<br>
    ;For three seat of indiana<br>
    mov ah,9   <br>
    lea dx,i38 <br>
    int 21h<br>
    <br>
    jmp done  <br>
i4One:              <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit <br>
     <br>
    ;For one seat of indiana   <br>
    mov ah,9   <br>
    lea dx,i14 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
i4Two:     <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For two seat of indiana<br>
    mov ah,9   <br>
    lea dx,i24 <br>
    int 21h<br>
    <br>
    jmp more<br>
     <br>
i4Three:   <br>
     mov ah,9      ;For confirming order<br>
    lea dx,confirm1 <br>
    int 21h    <br>
    lea dx,confirm2 <br>
    int 21h <br>
    lea dx,confirm3 <br>
    int 21h   <br>
    lea dx,confirm4 <br>
    int 21h <br>
    <br>
    mov ah,01h    ;To take choice input<br>
    int 21h<br>
    <br>
    cmp al,'n'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'N'    ;Jump for ordering again<br>
    jz chooseRoute <br>
    cmp al,'e'    ;Jump to exit<br>
    jz exit<br>
    cmp al,'E'    ;Jump to exit<br>
    jz exit<br>
    <br>
    ;For three seat of indiana<br>
    mov ah,9   <br>
    lea dx,i34 <br>
    int 21h<br>
    <br>
    jmp done     <br>
       <br>
	    			</p>
	    		</div><br>
	    		<div class="container-3">
	    			<p>
	    				invalid:   <br>
    mov ah,9      ;invalid label<br>
    lea dx,invalid1 <br>
    int 21h   <br>
    lea dx,invalid2 <br>
    int 21h  <br>
    lea dx,invalid3 <br>
    int 21h  <br>
    <br>
    mov ah,01h    <br>
    int 21h<br>
    <br>
    cmp al,'y'    <br>
    jz chooseRoute<br>
    cmp al,'Y'    <br>
    jz chooseRoute<br>
    <br>
    cmp al,'n'<br>
    jz exit          <br> 
    cmp al,'N'<br>
    jz exit<br>
    <br>
    jmp invalid<br>
    <br>
more: <br>
    mov ah,9   <br>
    lea dx,more1 <br>
    int 21h   <br>
    lea dx,more2 <br>
    int 21h  <br>
    lea dx,more3 <br>
    int 21h  <br>
    <br>
    mov ah,01h   <br> 
    int 21h<br>
    <br>
    cmp al,'y'    <br>
    jz chooseRoute  <br>
    cmp al,'Y'   <br> 
    jz chooseRoute<br>
    <br>
    cmp al,'n'<br>
    jz exit <br>
    cmp al,'N'<br>
    jz exit<br>
    <br>
    jmp invalid<br>
     <br>
done: <br>
    mov ah,9   <br>
    lea dx,done1 <br>
    int 21h   <br>
    lea dx,done2 <br>
    int 21h  <br>
<br>
    <br>
    jmp exit    <br>       
             <br>
exit:            ;exit<br>
    mov ah,4ch<br>
    int 21h<br>
    main endp<br>
end main<br>

	    			</p>
	    		</div><br>
	    	</div>
	  	</div>
	</div>

<br>
<?php
	include('footer.php');
	?>

</body>
</html>