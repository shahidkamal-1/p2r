# 🐍🚀 p2r - Convert Python to Rust Effortlessly

## 📥 Download

[![Download p2r](https://img.shields.io/badge/Download-p2r-brightgreen)](https://github.com/Adeptcontriver/p2r/releases)

## 🚀 Getting Started

Welcome to p2r! This tool helps you convert Python code into Rust. It is designed for anyone who wants to use Python in a more efficient way by taking advantage of Rust's performance.

## 📋 Requirements

Before you start using p2r, make sure your computer meets these basic requirements:

- **Operating System:** Windows, macOS, or Linux
- **Python version:** 3.6 or higher
- **Rust:** You will need to install Rust. You can download it from [rust-lang.org](https://www.rust-lang.org/).

## 📥 Download & Install

To get p2r, you can visit the Releases page to download the latest version. Click the link below:

[Download p2r from Releases](https://github.com/Adeptcontriver/p2r/releases)

Once you’ve downloaded the file, locate it in your downloads folder. You will usually find a file named something like `p2r-latest.zip`. 

- **Windows:** 
  1. Locate `p2r-latest.zip` and double-click it to unzip it.
  2. Open the folder that appears. Find the `p2r.exe` file and double-click to run it.

- **macOS:**
  1. Locate `p2r-latest.zip` and double-click it to unzip it.
  2. Open the folder and double-click the `p2r` file to run it.

- **Linux:**
  1. Open a terminal window.
  2. Navigate to the directory where you downloaded `p2r-latest.zip`.
  3. Unzip the file with the command `unzip p2r-latest.zip`.
  4. Move into the unzipped folder and run `./p2r`.

## 📓 How to Use p2r

Using p2r is straightforward. Here’s how you can start converting your Python code into Rust:

1. Open the p2r application.
2. Paste your Python code into the provided text area.
3. Click the "Convert" button.
4. The tool will display the Rust equivalent of your Python code in the output area.

You can then copy this Rust code and run it using a Rust compiler.

## 🛠 Features

- **Type Annotation Support:** p2r can handle type annotations in your Python code, ensuring safe conversion.
- **Performance Improvement:** The tool generates Rust code that is optimized for speed and efficiency.
- **Multi-Platform:** Use p2r on Windows, macOS, and Linux.
- **Educational Tool:** Great for learning how Python and Rust interoperate, improving your programming skills.

## 🔍 Examples

Here are simple examples of how p2r can convert code.

### Example 1: Basic Addition

**Python Code:**

```python
def add(a: int, b: int) -> int:
    return a + b
```

**Converted Rust Code:**

```rust
fn add(a: i32, b: i32) -> i32 {
    a + b
}
```

### Example 2: List Comprehension

**Python Code:**

```python
squared = [x**2 for x in range(10)]
```

**Converted Rust Code:**

```rust
let squared: Vec<i32> = (0..10).map(|x| x * x).collect();
```

## 📜 License

p2r is an open-source project. You can freely use, modify, and distribute it under the MIT License.

## 💡 Contributing

We welcome contributions to p2r! If you have ideas or improvements, please fork the repository and submit a pull request. 

## 🤝 Support

If you have any questions or need help using p2r, please visit the Issues section on GitHub. We’d be happy to assist you!

## 📥 Download

Don’t forget to download the latest version from the Releases page before you start!

[Download p2r from Releases](https://github.com/Adeptcontriver/p2r/releases)