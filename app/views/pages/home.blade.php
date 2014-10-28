@extends('master')

@section('content')
  <h1>{{ $name }}</h1>

  @foreach ($lessons as $lesson)
    <h2>{{$lesson}}</h2>
  @endforeach
  {{ app()->env }}
  <form id="flickrSearch">
    <input type="text" name="tag" id="query">
    <input type="submit" name="submit" value="submit">
  </form>
  <div id="lastQuery"></div>
  <ol id="searchResults"></ol>
  <script id="resultTemplate" type="text/html">
    <% _.each(items, function (item) { %>
        <li><img src="<%= item.media.m"/></li>
      <% }); %>
  </script>

@stop

@section('footer')
  <script>
  ;(function( $ ) {
    var resultTemplate = _.template($("#resultTemplate").html());
    $.subscribe( "/search/tags", function (e, tags) {
      $( "#lastQuery" ).html("<p>Searched for: <strong>" + tags + "</strong></p>");
    });

    $.subscribe("/search/resultSet", function (e, results) {
      $('#searchResults').empty().append(resultTemplate(results));
    });

    $('#flickrSearch').submit(function (e) {
      e.preventDefault();
      var tags = $(this).find('#query').val();
      if (!tags) {
        return;
      }
      $.publish("/search/tags", [ $.trim(tags) ]);
    });

    $.subscribe("/search/tags", function (e, tags) {
      $.getJSON("http://api.flickr.com/services/feeds/photos_public.gen?jsoncallback=?", {
        tags: tags,
        tagmode: "any",
        format: "json"
      },
      function (data) {
        if (!data.items.length) {
          return;
        }
      $.publish("/search/resultSet" , { items: data.items });
      });
    });
  })(jQuery);
  </script>
@stop
