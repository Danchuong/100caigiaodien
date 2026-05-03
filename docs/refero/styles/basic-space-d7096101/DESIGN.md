# Basic.Space — Refero Style

- Refero URL: https://styles.refero.design/style/d7096101-d33c-43b8-8b0b-d9dfff802db2
- Site URL: https://basic.space
- ID: d7096101-d33c-43b8-8b0b-d9dfff802db2
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:56:21.589Z
- Ranks: newest: 23, popular: 803, trending: 691

> Gallery Grid Monochrome.

## Description

Basic.Space presents a stark, almost utilitarian aesthetic, building on a foundation of pure achromatic neutrals. The design is characterized by crisp lines, minimal ornamentation, and a compact, information-dense display of products. Typography is consistently dark and primary, creating a strong contrast against the light canvas, while interactive elements are subtly defined by thin borders and precise spacing rather than bold color accents.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Fog | #ebebeb | neutral | Page backgrounds, subtle card outlines, dividing lines — serves as the primary visual separation |
| Inkwell | #000000 | neutral | Primary headings, body text, and icon fills on light surfaces. Do not promote it to the primary CTA color |
| Surface Frost | #cecccc | neutral | Background for specific content sections, creating subtle elevation shifts |
| Pure White | #ffffff | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Subtle Ash | #f7f7f7 | neutral | Secondary surface background, slightly off-white to provide minimal distinction |
| Placeholder Gray | #b5b5b5 | neutral | Placeholder text in inputs and muted secondary text for less prominent information |
| Electric Blue | #007aff | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| FTBasicSpace | Arial | 400, 500, 600 | 14px, 16px, 18px, 20px, 38px, 39px, 40px | 1.12, 1.13, 1.20, 1.22, 1.38, 1.43, 1.71 | The primary typeface for all text content, from headings to body copy and interactive labels. Its consistent use across weights and sizes establishes a cohesive, authoritative voice. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.71 | -0.14 |
| body | 16 | 1.43 | -0.16 |
| subheading | 18 | 1.22 | -0.18 |
| heading | 20 | 1.2 | -0.2 |
| display | 40 | 1.12 | -0.88 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "2px",
    "inputs": "16px",
    "buttons": "9999px"
  },
  "elementGap": "4px",
  "sectionGap": "48px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Outlined Pill Button

**Role:** Secondary action button, often used for navigation or filtering.

Background: transparent (rgba(0, 0, 0, 0)), Text: Inkwell (#000000), Border: 1px thin Canvas Fog (#ebebeb), Radius: 9999px, Padding: 8px on all sides.

### Ghost Link Button

**Role:** Minimal interactive text link or navigation item.

Background: transparent (rgba(0, 0, 0, 0)), Text: Pure White (#ffffff), Border: 1px thin Canvas Fog (#ebebeb), Radius: 0px, Padding: 0px.

### Product Card (Minimal)

**Role:** Default display for product listings with no visible border or shadow.

Background: transparent (rgba(0, 0, 0, 0)), Border: none, Radius: 0px, Padding: 0px.

### Product Card (Hover)

**Role:** Product display with a subtle radius, likely for interactive states.

Background: transparent (rgba(0, 0, 0, 0)), Border: none, Radius: 2px, Padding: 0px.

### Search Input (Filled)

**Role:** Primary search input field.

Background: Subtle Ash (#f7f7f7), Text: Inkwell (#000000), Border: 1px thin Canvas Fog (#ebebeb) on all sides, Radius: 16px, Padding: 0px top/bottom, 40px left, 80px right.

### Text Input (Underlined)

**Role:** Minimal input field, typically for forms.

Background: Pure White (#ffffff), Placeholder: Placeholder Gray (#b5b5b5), Border: 1px thin Canvas Fog (#ebebeb) on all sides, Radius: 0px, Padding: 0px.

## Do's

- Prioritize Inkwell (#000000) for all main text and Canvas Fog (#ebebeb) for backgrounds and subtle borders, establishing the core monochrome palette.
- Use 9999px border radius for all buttons and small interactive elements to create a pill-like, contained appearance.
- Apply 2px border radius to product cards and images to provide a consistent, slight softening of edges.
- Maintain high visual contrast for text by almost exclusively using Inkwell (#000000) on light backgrounds like Pure White (#ffffff), Subtle Ash (#f7f7f7), or Canvas Fog (#ebebeb).
- Employ the FTBasicSpace font consistently across all typographic elements, leveraging its different weights (400, 500, 600) to create hierarchy.
- Utilize 4px as the foundational unit for inner element spacing and padding to ensure compact visual density.
- Reserve Electric Blue (#007aff) for functional accents such as app download banners or interactive highlights, avoiding decorative overuse.

## Don'ts

- Do not introduce highly saturated colors for primary UI elements; adhere strictly to the achromatic palette with minimal Electric Blue accents.
- Avoid heavy shadows or gradients; rely on clean borders and subtle background shifts to define UI layers.
- Do not deviate from the specified border radii; maintain 9999px for buttons, 2px for cards, and 16px for inputs.
- Refrain from using varied typefaces or decorative font styles; FTBasicSpace covers all typographic needs.
- Do not use large, wide spacing for elements or sections; the system favors a compact, information-dense layout.
- Avoid complex, multi-layered components; keep interactive elements simple with clear, minimal styling.
- Do not use more than 1px border thickness; the system relies on hairline definitions for structure.

## Layout

The page adheres to a mostly full-bleed layout with content sections but employs a maximum width constraint implicitly for readability within those sections, centered horizontally. The hero section is a full-bleed visual banner, potentially with superimposed text. Section rhythm is primarily driven by color shifts between Canvas Fog, Subtle Ash, and Surface Frost backgrounds, creating distinct visual blocks often separated by thin horizontal lines. Content is frequently arranged in multi-column grids for product listings and alternating text-left/image-right compositions for feature sections. Overall density is compact, prioritizing product visibility in tight grids. Navigation is a sticky top bar with minimal links and a central search input.

## Imagery

The site uses a mix of high-quality product photography and artistic lifestyle shots focused on objects, not people. Photography is typically clean, high-key, and often isolated from context, emphasizing the product itself. Illustrations are stylized and abstract, used sparingly as visual highlights without explicit outlining. Icons are filled and monochromatic (Inkwell or Placeholder Gray), maintaining the minimal aesthetic. Imagery serves primarily as a product showcase and decorative atmosphere, with a high density of images relative to text in product grids.

## Similar Brands

| Business | Why |
| --- | --- |
| SSENSE | Monochromatic palette, emphasis on product photography, and a clean, high-fashion aesthetic. |
| GOAT | Grid-based product presentation, stark design, and a focus on high-contrast text against light backgrounds. |
| Kith | High-impact product visuals, minimal UI elements, and a predominantly black-and-white visual language. |
| Grailed | Similar approach to product listing cards, minimalist design, and direct, functional typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ebebeb
border: #ebebeb
accent: #007aff
primary action: no distinct CTA color

Example Component Prompts:
1. Create a header navigation link: 'All' with text Inkwell (#000000), using FTBasicSpace, weight 400, size 16px, lineHeight 1.43, letterSpacing -0.16px.
2. Design a product card: Background transparent, no border, Inkwell (#000000) for product name 'Small Russian Doll Tables', 16px FTBasicSpace weight 400; Muted text Placeholder Gray (#b5b5b5) for 'Rarify' at 14px FTBasicSpace weight 400, no radius.
3. Implement a search input: Background Subtle Ash (#f7f7f7), radius 16px, placeholder Placeholder Gray (#b5b5b5) 16px FTBasicSpace weight 400, border 1px Canvas Fog (#ebebeb), padding 0px top/bottom, 40px left, 80px right.
4. Compose a main heading: 'For You' using Inkwell (#000000), FTBasicSpace, weight 600, size 40px, lineHeight 1.12, letterSpacing -0.88px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521347480-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521347480-thumb.jpg |
