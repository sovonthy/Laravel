<h2>Subject List:</h2>
   <table>
     <thead>
         <tr>
             <th>Name</th>
             <th>Score</th>
         </tr>
     </thead>
     @foreach($subjects as $subject)
     <tbody>
         <tr>
             <td>{{$subject[0]}}</td>
             <td>{{$subject[1]}}</td>
         </tr>
     </tbody>
  
@endforeach
</table>