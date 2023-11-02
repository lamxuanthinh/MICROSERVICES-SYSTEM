package com.java.microservices.limitsservice;

import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.ArrayList;
import java.util.List;

@RestController
@RequestMapping("/cart")
public class CartController {
    private Cart cart = new Cart();

    @GetMapping("/get-cart-items")
    public ResponseEntity<List<CartItem>> getCartItems() {
        List<CartItem> cartItems = new ArrayList<>();
        for (CartItem item : cart.getItems()) {
            cartItems.add(item);
        }
        return ResponseEntity.ok(cartItems);
    }

    @PostMapping("/add")
    public ResponseEntity<String> addToCart(@RequestBody List<Product> products) {
        for (Product product : products) {
            CartItem cartItem = new CartItem();
            cartItem.setProduct(product);
            cartItem.setQuantity(10);
            cart.addItem(cartItem);
        }
        return ResponseEntity.ok("Items added to the cart.");
    }


    @DeleteMapping("/remove")
    public ResponseEntity<String> removeFromCart(@RequestBody CartItem item) {
        cart.removeItem(item);
        return ResponseEntity.ok("Item removed from the cart.");
    }

}
