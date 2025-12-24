import sys
from PIL import Image

input_path = sys.argv[1]
output_path = sys.argv[2]
quality = int(sys.argv[3])

img = Image.open(input_path)

if img.mode in ("RGBA", "P"):
    img = img.convert("RGB")

img.save(output_path, optimize=True, quality=quality)
