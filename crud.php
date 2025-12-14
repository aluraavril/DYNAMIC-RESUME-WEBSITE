<?php
include 'config.php';

$action = $_POST['action'] ?? '';

/* ---------- ABOUT ---------- */
if ($action === 'update_about') {
    $content = $_POST['content'];
    $additional_content = $_POST['additional_content'];  // New field
    $stmt = $conn->prepare("UPDATE about SET content=?, additional_content=? WHERE id=1");
    $stmt->bind_param("ss", $content, $additional_content);
    $stmt->execute();

    // Handle personal details if provided
    if (isset($_POST['personal_details'])) {
        $personalDetails = json_decode($_POST['personal_details'], true);
        // First, delete all existing records
        $conn->query("DELETE FROM personal_details");
        // Then insert the updated ones
        foreach ($personalDetails as $detail) {
            $stmt = $conn->prepare("INSERT INTO personal_details (id, label, value) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $detail['id'], $detail['label'], $detail['value']);
            $stmt->execute();
        }
    }
}

/* ---------- BUCKET LIST ---------- */
if ($action === 'update_bucket_list') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $items = json_decode($_POST['items'], true);

    // Update meta
    $stmt = $conn->prepare("UPDATE bucket_list_meta SET title=?, description=? WHERE id=1");
    $stmt->bind_param("ss", $title, $description);
    $stmt->execute();

    // Update items
    $conn->query("DELETE FROM bucket_list");
    foreach ($items as $item) {
        $stmt = $conn->prepare("INSERT INTO bucket_list (id, title, description) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $item['id'], $item['title'], $item['description']);
        $stmt->execute();
    }
}

/* ---------- PERSONAL STATS ---------- */
if ($action === 'update_personal_stats') {
    $stats = json_decode($_POST['stats'], true);

    $conn->query("DELETE FROM personal_stats");

    foreach ($stats as $stat) {
        $stmt = $conn->prepare("INSERT INTO personal_stats (id, icon, title, description) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $stat['id'], $stat['icon'], $stat['title'], $stat['description']);
        $stmt->execute();
    }
}

/* ---------- TRANSFERABLE SKILLS ---------- */
if ($action === 'update_transferable_skills') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $skills = json_decode($_POST['skills'], true);

    // Update meta
    $stmt = $conn->prepare("UPDATE transferable_skills_meta SET title=?, description=? WHERE id=1");
    $stmt->bind_param("ss", $title, $description);
    $stmt->execute();

    // Update skills
    $conn->query("DELETE FROM transferable_skills");
    foreach ($skills as $skill) {
        $stmt = $conn->prepare("INSERT INTO transferable_skills (id, skill_name, percentage) VALUES (?, ?, ?)");
        $stmt->bind_param("isi", $skill['id'], $skill['skill_name'], $skill['percentage']);
        $stmt->execute();
    }
}

/* ---------- TECHNICAL SKILLS ---------- */
if ($action === 'update_skills') {
    $skills = json_decode($_POST['skills'], true);

    $conn->query("DELETE FROM technical_skills");

    $inserted = [];  // Track inserted combos to avoid duplicates
    foreach ($skills as $s) {
        $combo = $s['category'] . '|' . $s['skills'];
        if (!in_array($combo, $inserted)) {
            $stmt = $conn->prepare(
                "INSERT INTO technical_skills (category, skills) VALUES (?, ?)"
            );
            $stmt->bind_param("ss", $s['category'], $s['skills']);
            $stmt->execute();
            $inserted[] = $combo;
        }
    }
}

/* ---------- PROJECTS ---------- */
if ($action === 'update_projects') {
    $projects = json_decode($_POST['projects'], true);
    $uploadDir = 'beaimg/';  // Use existing beaimg/ folder for uploads

    // Ensure upload directory exists (though it should already)
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $conn->query("DELETE FROM projects");

    foreach ($projects as $p) {
        $imageFilename = $p['image'];  // Default to existing filename

        // Handle file upload if a new file is provided
        if (isset($_FILES['images']) && isset($_FILES['images']['name'][$p['temp_id']])) {
            $file = $_FILES['images']['tmp_name'][$p['temp_id']];
            $originalName = $_FILES['images']['name'][$p['temp_id']];
            $fileType = $_FILES['images']['type'][$p['temp_id']];
            $fileSize = $_FILES['images']['size'][$p['temp_id']];

            // Validate: Only images, max 5MB, allowed types
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (in_array($fileType, $allowedTypes) && $fileSize <= 5 * 1024 * 1024) {  // 5MB limit
                $extension = pathinfo($originalName, PATHINFO_EXTENSION);
                $newFilename = uniqid() . '.' . $extension;  // Unique filename to avoid overwrites
                $targetPath = $uploadDir . $newFilename;

                if (move_uploaded_file($file, $targetPath)) {
                    $imageFilename = $newFilename;  // Update DB with new filename
                } else {
                    // Handle error (e.g., log or skip)
                    error_log("Failed to upload file: $originalName");
                }
            } else {
                // Invalid file, skip or log
                error_log("Invalid file: $originalName (type: $fileType, size: $fileSize)");
            }
        }

        $stmt = $conn->prepare("INSERT INTO projects (title, description, image, category) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $p['title'], $p['description'], $imageFilename, $p['category']);
        $stmt->execute();
    }
}

echo "success";

echo "success";

/* ---------- EDUCATION ---------- */
if ($action === 'update_education') {
    $education = json_decode($_POST['education'], true);

    $conn->query("DELETE FROM education");

    foreach ($education as $e) {
        $stmt = $conn->prepare(
            "INSERT INTO education (title, dates, institution, description)
             VALUES (?, ?, ?, ?)"
        );
        $stmt->bind_param(
            "ssss",
            $e['title'],
            $e['dates'],
            $e['institution'],
            $e['description']
        );
        $stmt->execute();
    }
}
/* ---------- SUMMARY ---------- */
if ($action === 'update_summary') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE summary SET name=?, description=?, location=?, phone=?, email=? WHERE id=1");
    $stmt->bind_param("sssss", $name, $description, $location, $phone, $email);
    $stmt->execute();
}

/* ---------- PROFESSIONAL EXPERIENCE ---------- */
if ($action === 'update_professional_experience') {
    $experiences = json_decode($_POST['experiences'], true);

    $conn->query("DELETE FROM professional_experience");

    foreach ($experiences as $exp) {
        $stmt = $conn->prepare("INSERT INTO professional_experience (title, dates, company, description) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $exp['title'], $exp['dates'], $exp['company'], $exp['description']);
        $stmt->execute();
    }
}

echo "success";


/* ---------- CERTIFICATIONS ---------- */
if ($action === 'update_certifications') {
    $certs = json_decode($_POST['certifications'], true);

    $conn->query("DELETE FROM certifications");

    foreach ($certs as $c) {
        $stmt = $conn->prepare(
            "INSERT INTO certifications (title, description)
             VALUES (?, ?)"
        );
        $stmt->bind_param("ss", $c['title'], $c['description']);
        $stmt->execute();
    }
}

echo "success";
