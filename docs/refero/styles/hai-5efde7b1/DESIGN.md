# Hai — Refero Style

- Refero URL: https://styles.refero.design/style/5efde7b1-008b-484c-82b1-d2628dccf855
- Site URL: https://www.homeofhai.com
- ID: 5efde7b1-008b-484c-82b1-d2628dccf855
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:32:09.906Z
- Ranks: newest: 129, popular: 853, trending: 682

> white gallery, black ink

## Description

Hai employs a minimalist aesthetic that centers on a clean, almost stark white canvas providing ample negative space for product photography and subtle typography. Contrasting with the light backdrop, all text and interactive elements are rendered in a deep, absolute black, creating sophisticated definition. The brand's distinctive visual identity is further characterized by the use of custom serif and sans-serif fonts with unique letter-spacing, giving a sense of exclusivity and handcrafted precision. Buttons feature a refined, subtle outline rather than bold fills, maintaining the quiet luxury feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Canvas White | #FFFFFF | neutral | Page backgrounds, card surfaces, default UI elements. Establishes a bright, expansive visual field |
| Ferry Red | #CF2442 | accent | Alerts, notifications, and potentially subtle brand accents. A secondary, reserved accent color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Forma Nuovo | Montserrat | 400, 600 | 16px, 22px, 24px, 28px, 32px | 0.80, 0.98, 1.00, 1.15, 1.25 | Headlines and prominent UI elements. Its confident but finely-tracked presence creates a modern, architectural feel. |
| Times Now | Lora | 400 | 16px, 18px, 24px, 26px, 31px, 32px | 0.80, 1.00, 1.15, 1.25 | Body copy, product descriptions, and subheadings. The serif provides a classic, luxurious counterpoint to the sans-serif headlines, with tight tracking adding to its refined character. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 16 | 1 | 0.8 |
| body | 18 | 1.25 | -0.8 |
| subheading | 22 | 1 | -1.65 |
| heading | 24 | 1 | -2.06 |
| heading-lg | 31 | 0.8 | -1.92 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "50%",
    "links": "10px",
    "buttons": "10px"
  },
  "elementGap": "16px",
  "sectionGap": "32px",
  "cardPadding": "32px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Outline Button

**Role:** Primary action button

Transparent background, a 1px solid Midnight Ink border, 10px border radius, and Midnight Ink text. Padding is generous at 16px vertical and 32px horizontal. This button style reinforces the elegant, understated aesthetic.

### Product Title (Forma Nuovo)

**Role:** Product listing headline

Forma Nuovo typeface at 32px, weight 400, with a tight letter-spacing of -0.15em, rendered in Midnight Ink. Provides a bold but not shouting presence for product names.

### Product Link (Times Now)

**Role:** Product detail link

Times Now typeface at 18px, weight 400, with letter-spacing -0.027em, rendered in Midnight Ink. Used for descriptive links, maintaining a classic, legible feel.

### Circular Card

**Role:** Decorative or featured product card

A unique card style with a 50% border-radius, effectively making it circular or an oval depending on content. Background is Canvas White with no box shadow, padding of 32px on all sides. Used for visual distinction.

### Navigation Link

**Role:** Top-level navigation item

Forma Nuovo typeface at 16px, weight 400, with a letter-spacing of -0.062em, in Midnight Ink. These links are minimal, direct, and rely on spacing for separation.

## Do's

- Prioritize ample negative space around all elements to maintain a clean, high-end feel.
- Use Midnight Ink (#000000) for all text and UI outlines to ensure stark contrast and definition.
- Apply Forma Nuovo for all headings and key UI labels, utilizing its specified letter-spacing for each size.
- Use Times Now for body text and descriptive elements, adhering to its specific letter-spacing for a refined look.
- Implement the Ghost Outline Button for all interactive elements, featuring the 1px Midnight Ink border and 10px radius.
- Maintain a clear visual hierarchy by limiting saturated colors; reserve Ferry Red (#CF2442) for highly specific and subtle accents if needed.
- Ensure all buttons and links utilize a 10px border-radius, while specialized circular cards use a 50% radius for distinctiveness.

## Don'ts

- Avoid using harsh drop shadows or heavy backgrounds; maintain the light and airy feel.
- Do not introduce new typefaces, as the chosen custom fonts are core to the brand's identity.
- Do not deviate from the specified letter-spacing values as they are a signature characteristic of the typography.
- Avoid filling buttons with solid background colors; stick to the ghost outline style for primary interactions.
- Do not clutter layouts with excessive elements; embrace spaciousness and minimalism.
- Do not use gradients unless explicitly part of the design system beyond the current data.
- Avoid using any color other than Midnight Ink for borders on interactive elements, or for primary text.

## Layout

The page primarily employs a full-bleed layout for hero sections featuring large imagery, while internal content often adheres to a max-width contained model. The hero section frequently presents a large visual on one side (e.g., a model) and a distinct brand element or text on the other. Vertical rhythm is characterized by comfortable, consistent section gaps, creating a spacious feel. Content arrangement often alternates between imagery and text, with text labels positioned deliberately adjacent to products. Navigation is a minimal top bar, displaying key links without overwhelming the header space. The overall density is light, with significant breathing room.

## Imagery

The site predominantly uses high-key product photography, often featuring candid-style models in lifestyle shots or tightly cropped product details (e.g., shoes). Imagery is integrated seamlessly into the white canvas, frequently appearing as full-bleed sections or subtly framed without strong borders. The visual focus is on the product and its texture, often with a raw, authentic feel. Icons, if present, are likely minimal, outlined, and monochromatic, matching the overall stark aesthetic. Imagery plays an atmospheric and showcase role, with a strong emphasis on texture and natural light.

## Similar Brands

| Business | Why |
| --- | --- |
| Acne Studios | Minimalist aesthetic with a strong emphasis on photography and muted color palettes, featuring custom typography. |
| Arket | Clean, almost sparse layouts, strong focus on product presentation, and a limited, high-contrast color scheme. |
| CDLP | High-end fashion ecommerce with a white background, black text, and subtle interactive elements, relying on fine typography. |
| Totême | Understated luxury, heavy use of negative space, large product imagery, and a monochrome palette with precise typographic details. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference: text: #000000, background: #FFFFFF, border: #000000, accent: #CF2442, primary action: no distinct CTA color

Example Component Prompts:
1. Create a navigation link: 'Shop' in Forma Nuovo, weight 400, size 16px, letter-spacing -0.062em, color #000000.
2. Create a ghost button: Text 'Shop Now' in Forma Nuovo, weight 400, size 16px, letter-spacing -0.062em, color #000000. Background transparent. Border 1px solid #000000. Border-radius 10px. Padding 16px vertical, 32px horizontal.
3. Create a product title: 'Lia Dress in Pink' in Forma Nuovo, weight 400, size 32px, letter-spacing -0.15em, color #000000.
4. Create a product description link: 'Harmony Ballerinas in Black and White Polka Dot' in Times Now, weight 400, size 18px, letter-spacing -0.027em, color #000000.
5. Create a circular card: Background #FFFFFF, border-radius 50%, no shadow. Padding 32px on all sides.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519912976-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519912976-thumb.jpg |
