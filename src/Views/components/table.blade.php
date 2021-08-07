<table
    class="article-enlil-editor-table border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
    @foreach ($block->content as $row)
        <tr class="cursor-pointer hover:bg-blue-50">
            @foreach ($row as $cell)
                <td class="border-dashed border-t border-gray-200 px-3">
                    {{$cell}}
                </td>
            @endforeach
        </tr>
    @endforeach
</table>
