document.addEventListener("alpine:init", () => {
  Alpine.data("products", () => ({
    items: [
      {
        id: 1,
        name: "CASCAVEL",
        img: "../img/CASCAVEL/Cascavel.5f123e66.webp",
        price: 100000,
      },
      {
        id: 2,
        name: "CHNO",
        img: "../img/CASCAVEL/CASCAVEL-01.4dcab07b.webp",
        price: 105000,
      },
      {
        id: 3,
        name: "COCO",
        img: "../img/CASCAVEL/CASCAVEL-02.7e5cba0c.webp",
        price: 150000,
      },
      {
        id: 4,
        name: "JO",
        img: "../img/CASCAVEL/CASCAVEL-03.aa033d97.webp",
        price: 151000,
      },
    ],
  }));

 Alpine.store('cart', {
    items: [],
    total: 0,
    quantity:0,
    add(newItem) {
        //cek apakah ada barang yang sama
        const cartItem = this.items.find((item) => item.id === newItem.id);

        //jika belum ada/ cart masih kosong
        if (!cartItem){
            this.items.push({...newItem, quantity: 1, total: newItem.price });
            this.quantity++;
            this.total += newItem.price;
            console.log(this.total);
        }else{
            //jika barangnya udah ada cek sama atau beda
            this.items = this.items.map((item) => {
                //jika barang berbeda
                if (item.id !== newItem.id){
                    return item;
                }else {
                    //jika barang sudah ada tambah quantity dan subtotalnya
                    item.quantity++;
                    item.total = item.price * item.quantity;
                    this.quantity++;
                    this.total += item.price;
                    return item;
                }
            });
        }
    },

   remove(id) {
    //ambil item yang di remove berdasarkan id
    const cartItem = this.items.find((item) => item.id === id);

    //jika item lebih dari 1
    if (cartItem.quantity > 1) {
        //telusuri satu satu
        this.items = this.items.map((item) => {
            //jika bukan brang yang di klik
            if(item.id !== id){
                return item;
            }else{
                item.quantity--;
                item.total = item.price * item.quantity;
                this.quantity--;
                this.total -= item.price;
                return item;
            }
        });
    }else if (cartItem.quantity === 1) {
        //jika barangnya sisa satu 
        this.items = this.items.filter((item) => item.id !== id);
        this.quantity--;
        this.total -= cartItem.price;
    }
},

});

});


//konversi ke rupiah

const rupiah = (number) => {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
    }).format(number);
};
