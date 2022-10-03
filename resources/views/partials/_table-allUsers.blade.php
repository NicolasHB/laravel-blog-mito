@php
    $index = 1;
@endphp
<div class="overflow-x-auto">
  <table class="table table-zebra w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @forelse ($users as $user )
        <tr>
            <th>{{ $index++ }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('d/m/y') }}</td>
      </tr>
      @empty
      <tr>
          <td>Pas de post actuellement</td>
      </tr>   
      @endforelse
      
    </tbody>
  </table>
</div>