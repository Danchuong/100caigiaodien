# Resident — Refero Style

- Refero URL: https://styles.refero.design/style/f451c085-f048-4c9c-ae3b-03acc88320ab
- Site URL: https://resident.co.nz
- ID: f451c085-f048-4c9c-ae3b-03acc88320ab
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T01:45:08.981Z
- Ranks: newest: 527, popular: 676, trending: 407

> Gallery Grid Serenity

## Description

Resident employs a disciplined, gallery-like visual language, emphasizing product photography with stark white space and precise, minimal typography. Achromatic tones of black and white dominate, providing a quiet canvas for product hero shots. The design system leans into content-rich layouts, using tight typographic control for an authoritative, editorial feel, with interactive elements sparingly articulated through subtle borders and text rather than bold fills.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button fills |
| Ink Black | #000000 | neutral | Primary text, headings, strong link and button borders, active states, most icons — establishes a stark, high-contrast visual identity |
| Muted Ash | #979797 | neutral | Muted helper text, secondary information, soft border accents for inputs or subtle dividers |
| Graphite | #333333 | neutral | Muted icon strokes, separators, and secondary graphic details. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif | system-ui | 400 | 12px, 14px | 1.20, 1.30 | Utility text for navigation, small print, image captions, and general body content where unobtrusive clarity is key. Its system-font nature aids quick loading and broad compatibility. |
| MessinaSansWeb | Helvetica Neue | 400, 500 | 14px, 18px, 19px, 23px, 27px | 1.00, 1.20, 1.29, 1.40 | Primary headings, article titles, prominent body text, and some navigation elements. Tightly tracked letter spacing, especially at larger sizes, gives a refined and architectural precision. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body-sm | 14 | 1.3 |  |
| subheading | 18 | 1.2 | -0.03 |
| heading | 23 | 1.29 | -0.03 |
| display | 27 | 1 | -0.037 |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px",
    "pill": "50%"
  },
  "elementGap": "21px",
  "sectionGap": "35px",
  "cardPadding": "14px",
  "pageMaxWidth": null
}
```

## Components

### Primary Navigation Link

**Role:** Top-level navigation items

Ink Black text at MessinaSansWeb, weight 400, 14px, lineHeight 1.4. No padding, no border. Interactive via hover for subtle change.

### Secondary Ghost Button

**Role:** Language switcher, login links

Canvas White background, Ink Black text (sans-serif, weight 400), 0px border-radius, 0px padding. Designed to be unobtrusive and blend with the Canvas White background.

### Outlined Pill Button

**Role:** Small interactive elements like language selection (e.g. 'EN/DE')

Transparent background, Graphite text (333333), 1px Graphite border, 50% border-radius (pill shape). Minimal 1px vertical, 6px horizontal padding. A subtle, functional touch.

### Product Grid Card

**Role:** Displaying product images and brief descriptions in a gallery format

Transparent background, 0px border-radius, no shadow. Product image acts as its visual anchor. Content padding is 0px directly surrounding the image, with Ink Black text for titles and pricing.

### Text Input Field

**Role:** Form fields like login, password

Transparent background, Ink Black text (sans-serif, weight 400) and 1px Ink Black border only on the bottom. No border-radius. Features 9.8px vertical padding. Focus state likely uses a similar subtle border highlight.

## Do's

- Prioritize product photography as the focal point, allowing images to extend full-bleed or occupy significant visual space without heavy UI overlays.
- Use Ink Black (#000000) for all primary text and headings against Canvas White (#ffffff) backgrounds to maintain a high-contrast, editorial feel.
- Maintain a density of comfortable spacing by defaulting to 21px for element gaps and 14px for card padding, creating breathing room around content.
- Apply 0px border-radius to all major interactive elements and cards, preserving the sharp, architectural aesthetic.
- Utilize MessinaSansWeb for headlines and prominent body text with letter-spacing adjusted for precise visual fit, like -0.0370em at 27px.
- Employ `sans-serif` (system font) for secondary and utility text, ensuring high legibility and efficiency for smaller, functional details.
- Use subtle, text-based interactive elements (buttons, links) with minimal styling — often transparent backgrounds and thin borders instead of filled shapes.

## Don'ts

- Avoid using saturated or bright colors; restrict the palette almost entirely to achromatic neutrals (Canvas White, Ink Black, Muted Ash, Graphite).
- Do not use box-shadows or elevated elements; maintain a flat, two-dimensional design language for all UI components.
- Refrain from using heavily styled buttons with solid color fills; default to text links, ghost buttons, or subtly outlined elements.
- Do not introduce decorative gradients or complex backgrounds; interfaces should be clean Canvas White to highlight content.
- Avoid generic large-scale letter-spacing; use the precise, negative letter-spacing defined for MessinaSansWeb at larger sizes for consistency.
- Do not break away from the minimal, stark presentation of interactive elements; avoid hover effects that drastically change component appearance.

## Imagery

The imagery is dominated by high-quality product photography and architectural interior shots. Treatment is often full-bleed or large-format, allowing the visual to dictate the section. Products are typically shown in sophisticated, minimalist environments, often with stark lighting. Some lifestyle and landscape photography provides contextual atmosphere. Image density is high, with visuals often taking precedence over text. Icons (e.g., search, cart) are minimal, outlined, and in Ink Black, reinforcing the austere aesthetic.

## Similar Brands

| Business | Why |
| --- | --- |
| Fritz Hansen | Shares a high-end furniture and lighting product focus with a clean, gallery-like layout and strong emphasis on product photography. |
| Carl Hansen & Søn | Similar minimalist design, extensive use of white space, and a refined typographic approach to showcase premium design products. |
| String Furniture | Employs an achromatic color palette and a grid-based system where product images are paramount, with sparse, precise text. |
| Menu (now Audo Copenhagen) | Known for a stark, modern aesthetic, deep engagement with photography, and a subdued UI that puts product at the forefront. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #000000
background: #ffffff
border: #000000
accent: no distinct accent color
primary action: no distinct CTA color

### 3-5 Example Component Prompts
1. Create a navigational menu item: 'Furniture' text in Ink Black (#000000), MessinaSansWeb font, weight 400, 14px, lineHeight 1.4. No background, no border, 0px padding.
2. Design a product grid item: A large image (placeholder) with a transparent background, Ink Black (#000000) text below it for 'Plane Lounge Chair Jamie McLellan', MessinaSansWeb, 14px, weight 400, 0px border radius, 0px padding.
3. Implement a form input field: Transparent background, Ink Black (#000000) text (sans-serif, weight 400), with a 1px solid Ink Black (#000000) bottom border, 0px border-radius, 9.8px vertical padding. Placeholder text in Muted Ash (#979797).
4. Create a small informational link: 'Forgot your password?' text in Muted Ash (#979797), sans-serif font, weight 400, 14px, lineHeight 1.3.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513488410-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513488410-thumb.jpg |
