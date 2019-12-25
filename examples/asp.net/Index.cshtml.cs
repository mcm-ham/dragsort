using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Logging;

namespace DragSort
{
    public class IndexModel : PageModel
    {
        public string[] Data = new[] { "blue", "orange", "brown", "red", "yellow", "green", "black", "white", "purple" };

        public void OnPostSaveOrder([FromBody] int[] ids)
        {
            for (int i = 0; i < ids.Length; i++)
            {
                int id = ids[i];
                int ordinal = i;
                //...
            }
        }
    }
}
