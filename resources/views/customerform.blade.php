<form class="contaact-form" action="store" method="POST">
     @csrf
     <input type="text" name="subject" placeholder="List"><hr>
     <input type="text" name="fname" placeholder="First_Name"><hr>
     <input type="text" name="lname" placeholder="Last_Name"><hr>
     <input type="text" name="order" placeholder="Order_Code"><hr>
     <input type="text" name="date" placeholder="Date"><hr>
     <input type="text" name="taka" placeholder="Order_TK"><hr>
     <button type="submit" name="submit">Submit</button>
</form>
