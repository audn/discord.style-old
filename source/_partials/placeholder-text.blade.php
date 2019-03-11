@if (isset($paragraphs) && !empty($paragraphs))
    @php echo file_get_contents("http://loripsum.net/api/$paragraphs"); @endphp
@else
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
@endif
