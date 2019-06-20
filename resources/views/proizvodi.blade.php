@extends('layout')
@section('content')
@if($show == 'link')

   <a href="#">Link></a>
   
 @else
  <ul>
    @foreach ($proizvodi as $proizvod)
    <li>
      <a href="/proizvod/{{$proizvod['id']}}">{{ $proizvod['ime']}} </a>
    </li>
     @endforeach   
   

  </ul>
@endif
 <div  {{ $mode == 'dark' ? "class=bg-dark" : "style=background-color:pink;" }}>
    <p>
         Wikipedija (wiki na havajskom brzo ili požuriti[2] i -pedija[3]) višejezična je,
         na Webu zasnovana enciklopedija slobodnog sadržaja. Ona postoji kao wiki, što 
         podrazumijeva da se piše u suradnji s brojnim volonterima, te većinu članaka može 
        uređivati svatko s pristupom Internetu i odgovarajućim web preglednikom.
       Projekt je započet 15. siječnja 2001. kao dodatak stručno pisanoj (i do sada ugasloj) Nupediji. 
         Wikipedijom danas rukovodi neprofitna organizacija zaklada Wikimedija, koja ima više od 15 milijuna
         članaka na mnogo jezika (uključujući 5 milijuna članaka na engleskom jeziku,
         te više od 180 tisuća na hrvatskom jeziku[4]).
    </p>
@endsection