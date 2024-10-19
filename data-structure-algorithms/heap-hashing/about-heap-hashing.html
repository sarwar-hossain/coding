<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heap and Hashing</title>
    <link rel="stylesheet" href="../../style/about-dsa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<?php include '../../backsymbol.php'; ?>
    <div class="container">
        <h1>Heap and Hashing</h1>
        
        <section>
            <h2>Heap</h2>
            <p>A <strong>Heap</strong> is a specialized tree-based data structure that satisfies the heap property. It is commonly used to implement priority queues and efficiently manage dynamic sets of data.</p>
        
            <h3>Types of Heaps</h3>
            <ul>
                <li><strong>Min-Heap:</strong> In a min-heap, the value of each node is greater than or equal to the value of its parent, ensuring that the smallest element is always at the root.</li>
                <li><strong>Max-Heap:</strong> In a max-heap, the value of each node is less than or equal to the value of its parent, ensuring that the largest element is always at the root.</li>
            </ul>
        
            <h3>Heap Operations</h3>
            <ul>
                <li><strong>Insertion:</strong> Add a new element to the heap while maintaining the heap property.</li>
                <li><strong>Deletion:</strong> Remove the root element (minimum or maximum) and reheapify to maintain the heap property.</li>
                <li><strong>Peek:</strong> Retrieve the root element without removing it.</li>
                <li><strong>Heapify:</strong> Convert an unordered array into a heap.</li>
            </ul>
        
            <h3>Applications of Heaps</h3>
            <ul>
                <li><strong>Priority Queues:</strong> Manage a dynamically changing dataset where elements are processed based on priority.</li>
                <li><strong>Heap Sort:</strong> An efficient comparison-based sorting algorithm.</li>
                <li><strong>Graph Algorithms:</strong> Implement algorithms like Dijkstra's and Prim's for shortest paths and minimum spanning trees.</li>
                <li><strong>Median Maintenance:</strong> Efficiently find the median in a data stream.</li>
            </ul>
        
            <h3>Example: Implementing a Min-Heap in C++</h3>
            <p>The following example demonstrates how to implement a Min-Heap using a vector in C++:</p>
            <pre><code>
// C++ Program to implement a Min-Heap
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;stdexcept&gt;

class MinHeap {
private:
    std::vector<int> heap;

    void heapifyUp(int index) {
        if (index && heap[parent(index)] > heap[index]) {
            std::swap(heap[index], heap[parent(index)]);
            heapifyUp(parent(index));
        }
    }

    void heapifyDown(int index) {
        int smallest = index;
        int leftChild = left(index);
        int rightChild = right(index);

        if (leftChild < heap.size() && heap[leftChild] < heap[smallest])
            smallest = leftChild;
        if (rightChild < heap.size() && heap[rightChild] < heap[smallest])
            smallest = rightChild;
        if (smallest != index) {
            std::swap(heap[index], heap[smallest]);
            heapifyDown(smallest);
        }
    }

    int parent(int index) { return (index - 1) / 2; }
    int left(int index) { return 2 * index + 1; }
    int right(int index) { return 2 * index + 2; }

public:
    void insert(int key) {
        heap.push_back(key);
        heapifyUp(heap.size() - 1);
    }

    int extractMin() {
        if (heap.empty())
            throw std::runtime_error("Heap is empty");
        int root = heap[0];
        heap[0] = heap.back();
        heap.pop_back();
        heapifyDown(0);
        return root;
    }

    int getMin() const {
        if (heap.empty())
            throw std::runtime_error("Heap is empty");
        return heap[0];
    }

    bool empty() const { return heap.empty(); }
};

int main() {
    MinHeap h;
    h.insert(3);
    h.insert(2);
    h.insert(15);
    h.insert(5);
    h.insert(4);
    h.insert(45);

    std::cout &lt;&lt; "Minimum element: " &lt;&lt; h.getMin() &lt;&lt; std::endl;

    std::cout &lt;&lt; "Extracted min: " &lt;&lt; h.extractMin() &lt;&lt; std::endl;
    std::cout &lt;&lt; "New min: " &lt;&lt; h.getMin() &lt;&lt; std::endl;

    return 0;
}
            </code></pre>
        </section>

        <section>
            <h2>Hashing</h2>
            <p><strong>Hashing</strong> is a technique used to uniquely identify a specific object from a group of similar objects. It involves mapping data of arbitrary size to fixed-size values, typically using a hash function.</p>
        
            <h3>Hash Tables</h3>
            <p>A <strong>Hash Table</strong> is a data structure that implements an associative array abstract data type, a structure that can map keys to values. It uses a hash function to compute an index into an array of buckets or slots, from which the desired value can be found.</p>
        
            <h3>Hash Functions</h3>
            <p>A <strong>Hash Function</strong> is a function that takes an input (or "key") and returns a fixed-size string of bytes. The output is typically a numerical value used as an index in a hash table.</p>
        
            <h3>Collision Resolution Techniques</h3>
            <ul>
                <li><strong>Chaining:</strong> Each bucket contains a linked list of entries that hash to the same index.</li>
                <li><strong>Open Addressing:</strong> All elements are stored within the hash table itself. Methods include linear probing, quadratic probing, and double hashing.</li>
                <li><strong>Rehashing:</strong> If a collision occurs, a new hash function is applied to find another empty slot.</li>
            </ul>
        
            <h3>Applications of Hashing</h3>
            <ul>
                <li><strong>Database Indexing:</strong> Quickly locate data without scanning every row.</li>
                <li><strong>Caching:</strong> Store frequently accessed data for quick retrieval.</li>
                <li><strong>Cryptography:</strong> Ensure data integrity and secure password storage.</li>
                <li><strong>Data Deduplication:</strong> Identify and eliminate duplicate data.</li>
                <li><strong>Associative Arrays and Sets:</strong> Implement efficient lookups, insertions, and deletions.</li>
            </ul>
        
            <h3>Example: Implementing a Hash Map in C++</h3>
            <p>The following example demonstrates a simple implementation of a Hash Map using chaining in C++:</p>
            <pre><code>
// C++ Program to implement a simple Hash Map using Chaining
#include &lt;iostream&gt;
#include &lt;list&gt;
#include &lt;vector&gt>
#include &lt;utility&gt>

class HashMap {
private:
    static const int hashSize = 10;
    std::vector<std::list<std::pair<int, std::string>>> table;

    int hashFunction(int key) {
        return key % hashSize;
    }

public:
    HashMap() {
        table.resize(hashSize);
    }

    void insert(int key, const std::string &value) {
        int hashIndex = hashFunction(key);
        for (auto &pair : table[hashIndex]) {
            if (pair.first == key) {
                pair.second = value;
                return;
            }
        }
        table[hashIndex].emplace_back(key, value);
    }

    void remove(int key) {
        int hashIndex = hashFunction(key);
        auto &chain = table[hashIndex];
        for (auto it = chain.begin(); it != chain.end(); ++it) {
            if (it->first == key) {
                chain.erase(it);
                return;
            }
        }
    }

    std::string get(int key) {
        int hashIndex = hashFunction(key);
        for (auto &pair : table[hashIndex]) {
            if (pair.first == key)
                return pair.second;
        }
        return "Key not found";
    }

    void display() {
        for (int i = 0; i < hashSize; ++i) {
            std::cout &lt;&lt; "Bucket " &lt;&lt; i &lt;&lt; ": ";
            for (auto &pair : table[i]) {
                std::cout &lt;&lt; "[" &lt;&lt; pair.first &lt;&lt; ": " &lt;&lt; pair.second &lt;&lt; "] ";
            }
            std::cout &lt;&lt; std::endl;
        }
    }
};

int main() {
    HashMap hm;
    hm.insert(1, "Apple");
    hm.insert(2, "Banana");
    hm.insert(11, "Cherry");
    hm.insert(21, "Date");

    std::cout &lt;&lt; "Hash Map Contents:" &lt;&lt; std::endl;
    hm.display();

    std::cout &lt;&lt; "Value for key 11: " &lt;&lt; hm.get(11) &lt;&lt; std::endl;

    hm.remove(2);
    std::cout &lt;&lt; "After removing key 2:" &lt;&lt; std::endl;
    hm.display();

    return 0;
}
            </code></pre>
        </section>

        <section>
            <h2>Heap vs. Hashing</h2>
            <p>While both Heaps and Hashing are fundamental data structures in computer science, they serve different purposes and have distinct characteristics:</p>
            <ul>
                <li><strong>Heap:</strong>
                    <ul>
                        <li>Used primarily for implementing priority queues.</li>
                        <li>Supports efficient retrieval of the minimum or maximum element.</li>
                        <li>Maintains a partial ordering of elements.</li>
                        <li>Commonly implemented using trees or arrays.</li>
                    </ul>
                </li>
                <li><strong>Hashing:</strong>
                    <ul>
                        <li>Used for efficient data retrieval based on keys.</li>
                        <li>Offers average-case constant time complexity for insertions, deletions, and lookups.</li>
                        <li>Does not maintain any particular order of elements.</li>
                        <li>Implemented using hash tables with collision resolution techniques.</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section>
            <h2>Example Problem: Find the k Largest Elements in an Array Using a Heap</h2>
            <p>Given an unsorted array, find the <strong>k</strong> largest elements. A Min-Heap can be used to efficiently solve this problem.</p>
            <pre><code>
// C++ Program to find k largest elements using Min-Heap
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;queue&gt;

std::vector<int> kLargest(const std::vector<int> &arr, int k) {
    // Min-Heap to store the k largest elements
    std::priority_queue<int, std::vector<int>, std::greater<int>> minHeap;

    for (int num : arr) {
        if (minHeap.size() < k)
            minHeap.push(num);
        else if (num > minHeap.top()) {
            minHeap.pop();
            minHeap.push(num);
        }
    }

    std::vector<int> result;
    while (!minHeap.empty()) {
        result.push_back(minHeap.top());
        minHeap.pop();
    }

    return result;
}

int main() {
    std::vector<int> arr = {12, 5, 787, 1, 23, 45, 90, 67, 34};
    int k = 4;
    std::vector<int> largest = kLargest(arr, k);

    std::cout &lt;&lt; "The " &lt;&lt; k &lt;&lt; " largest elements are: ";
    for (int num : largest)
        std::cout &lt;&lt; num &lt;&lt; " ";
    std::cout &lt;&lt; std::endl;

    return 0;
}
            </code></pre>
            <p>**Explanation:**</p>
            <ol>
                <li>Create a Min-Heap of size <strong>k</strong>.</li>
                <li>Iterate through each element in the array:
                    <ul>
                        <li>If the heap has less than <strong>k</strong> elements, add the current element.</li>
                        <li>If the current element is larger than the smallest element in the heap, remove the smallest and add the current element.</li>
                    </ul>
                </li>
                <li>After processing all elements, the heap contains the <strong>k</strong> largest elements.</li>
            </ol>
        </section>

    </div>
</body>
</html>
