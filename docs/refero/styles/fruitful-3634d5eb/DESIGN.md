# Fruitful — Refero Style

- Refero URL: https://styles.refero.design/style/3634d5eb-ccfa-4881-b234-3dd735fb7ae4
- Site URL: https://fruitful.com
- ID: 3634d5eb-ccfa-4881-b234-3dd735fb7ae4
- Theme: light
- Industry: fintech
- Created: 2026-04-30T00:11:42.102Z
- Ranks: newest: 875, popular: 473, trending: 336

> Calm Financial Clarity

## Description

Fruitful projects a calm, approachable financial tech image through a clean white canvas, softened neutrals, and a prominent, vibrant green brand accent. Typography is modern and unembellished, emphasizing clarity and directness. Components are lightweight with generous rounded corners, conveying a friendly and trustworthy feel, while subtle shadows add minimal depth without heaviness. The overall impression is one of ease and quiet confidence in managing personal finance.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Primary page background, card backgrounds, all base surfaces |
| Rich Black | #000000 | neutral | Primary text, prominent headings, and strong borders |
| Subtle Ash | #eceff4 | neutral | Subtle card backgrounds, navigation accents, very light surface differentiation |
| Cool Gray | #5b616b | neutral | Secondary text, muted links, descriptive body copy |
| Deep Fern Green | #0b7443 | brand | Primary action buttons, brand logo, active navigation indicators, link hover states — a grounding, trustworthy color |
| Leafy Green | #61bc76 | brand | Decorative icons, light accents on cards, subtle approval indicators |
| Muted Sage | #d1fadf | accent | Light background wash for sections, subtle button backgrounds, navigation borders |
| Melon Tint | #fee9d1 | accent | Background for feature cards, soft decorative panels, creating warmth |
| Terra Cotta | #715039 | accent | Muted secondary headings, financial figures, specific card text — provides a warm earthy contrast |
| Sky Mist | #c7e0f8 | accent | Light button backgrounds, subtle hover states, providing a cool undertone |
| Light Peach | #ffdcb4 | accent | Light button backgrounds, subtle hover states |
| Mint Green Glow | #e1fdea | accent | Soft section background, alternate surface, and quiet card fill. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| PP Neue Montreal | Inter, Arial, sans-serif | 400, 500, 600, 700 | 11px, 12px, 13px, 14px, 15px, 16px, 18px, 19px, 20px, 21px, 23px, 24px, 26px, 38px, 45px, 48px, 49px, 60px, 91px | 1.2 | The sole typeface, used across all elements from large display headings to fine print. Its clean, geometric sans-serif form ensures modern readability and consistency. Variable letter-spacing helps optimize legibility across different sizes, from subtle tightening on display sizes to standard tracking for body text. Weight 400 is standard for body, 500 for semi-bold emphasis, and 600/700 for headlines. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.32 |  |
| body-sm | 13 | 1.32 |  |
| body | 16 | 1.32 |  |
| body-lg | 19 | 1.32 |  |
| heading-sm | 21 | 1.32 |  |
| heading | 24 | 1.3 |  |
| heading-lg | 45 | 1.3 |  |
| display-sm | 49 | 1.3 |  |
| display | 91 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "badges": "80px",
    "images": "12px",
    "inputs": "12px",
    "buttons": "12px",
    "general": "12px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "48px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Main call to action button.

Filled with Deep Fern Green (#0b7443), white text, 12px border radius. Padding: 8px vertical, 20px horizontal. Uses PP Neue Montreal, 400 weight.

### Ghost Outline Button

**Role:** Secondary action or alternative call to action.

Transparent background, Cool Gray (#98a2b3) 1px border. Cool Gray (#98a2b3) text, 12px border radius. Padding: 7.55px vertical, 22.66px horizontal. Uses PP Neue Montreal, 400 weight.

### Muted Neutral Button

**Role:** Tertiary action or filter controls.

Subtle Ash (#eceff4) background, Rich Black (#000000) text, 12px border radius. Padding: 8px vertical, 20px horizontal. Uses PP Neue Montreal, 400 weight.

### Feature Card (Peach)

**Role:** Highlighting key features or interactive elements.

Melon Tint (#fee9d1) background, 12px border radius. No visible shadow or additional padding from specific variant data.

### Plain Content Card

**Role:** Standard content containers, often for text or simple UI groups.

Subtle Ash (#eceff4) background, 12px border radius. Padding: 20px vertical, 48px horizontal. No shadow.

### Elevated Marketing Card

**Role:** Promotional or high-impact content block requiring subtle depth.

Light Peach (#fef0c7) background, 10px border radius. Features a soft, layered shadow: rgba(0, 0, 0, 0.05) 0px 25px 16px 0px, rgba(0, 0, 0, 0.1) 0px 10px 10px 0px, rgba(0, 0, 0, 0.1) 0px 3px 6px 0px.

### Attribute Badge (White)

**Role:** Metadata tags for categorizing or describing items.

White text on a transparent background with 80px border radius and a 0.4 opacity white background (#f9fabb, 0.4). Padding: 5.66px in all directions. Uses PP Neue Montreal, 400 weight. (Example: '☀️ Cheerful').

## Do's

- Prioritize Canvas White (#ffffff) for primary backgrounds to maintain an expansive, clean feel.
- Use Deep Fern Green (#0b7443) exclusively for primary calls to action and critical brand accents.
- Reserve Rich Black (#000000) for all primary text and display headings, ensuring strong contrast.
- Apply 12px border radius for all interactive elements like buttons, cards, and images to ensure visual consistency.
- Maintain a comfortable information density using an 8px base unit, evidenced by frequent element gaps.
- Differentiate content blocks with subtle background tints like Subtle Ash (#eceff4) or Melon Tint (#fee9d1) rather than strong borders.

## Don'ts

- Avoid using multiple vivid colors; restrict the palette to the primary green and selected muted accents.
- Do not introduce strong, dark backgrounds unless clearly for a full-bleed hero section, as the theme is predominantly light.
- Do not use sharp corners; a minimum 12px radius should be present on most significant UI elements.
- Refrain from heavy, intense shadows; employ the light, layered shadow of the 'Elevated Marketing Card' for subtle depth only.
- Avoid generic system fonts; PP Neue Montreal is key to the brand's distinct typographic voice.
- Do not use dark text on dark backgrounds; ensure sufficient contrast (at least 7:1 for body text, 4.5:1 for large text) for all text elements.

## Layout

The page structure is max-width contained, with content centered. The hero section is full-width with a prominent, centered headline over a white background, followed by a video element with rounded corners. Subsequent sections alternate between white and subtle tinted backgrounds (e.g., Melon Tint, Subtle Ash), creating a rhythmic vertical flow. Content is often arranged in a two-column layout with text on one side and imagery/cards on the other, or in feature grids with a comfortable column count. Navigation is a sticky top bar with a clear primary action button on the right.

## Imagery

Minimal imagery focused primarily on product-related visuals and authentic human portraits. Photography of individuals (guides) is candid, well-lit, and appears within soft-edged card containers, usually with muted background colors like Melon Tint (#fee9d1). Visuals serve to explain services or introduce team members, not for decorative atmosphere. Icons are simple, outlined, and occasionally filled with brand colors like Leafy Green (#61bc76), maintaining a clean UI aesthetic. Visual density is low, making imagery feel deliberate and impactful when present.

## Elevation

| Element | Style |
| --- | --- |
| Marketing Card | rgba(0, 0, 0, 0.05) 0px 25px 16px 0px, rgba(0, 0, 0, 0.1) 0px 10px 10px 0px, rgba(0, 0, 0, 0.1) 0px 3px 6px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Wealthfront | Clean white backgrounds, strong sans-serif typography, and a prominent brand accent color for CTAs. |
| Betterment | Minimalist UI, focus on clear information hierarchy, and soft, approachable aesthetics in financial services. |
| Mint | Utilizes a balanced combination of functional UI with softer visual elements and a clear brand color. |
| Stripe | Emphasis on modern, direct typography and a clean, almost monochrome base with thoughtful use of accent colors. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #d1fadf
accent: #0b7443
primary action: #0b7443 (filled action)

Example Component Prompts:
1. Create a primary call-to-action button: 'Get Started' text, filled with Deep Fern Green (#0b7443), white text, 12px radius, 8px vertical padding, 20px horizontal padding, PP Neue Montreal 400 weight.
2. Create a secondary ghost button: 'Learn More' text, transparent background, Cool Gray (#98a2b3) 1px border, Cool Gray (#98a2b3) text, 12px radius, 7.55px vertical padding, 22.66px horizontal padding, PP Neue Montreal 400 weight.
3. Design a feature card: Melon Tint (#fee9d1) background, 12px radius. Place a heading 'Smart Savings' in Rich Black (#000000), PP Neue Montreal 600 weight, and body text 'Automate your financial goals' in Cool Gray (#5b616b), PP Neue Montreal 400 weight. Use 20px top/bottom padding and 48px left/right padding.
4. Create a person card for a guide: Pale Peach (#fef0c7) background, 10px radius, with the specific layered shadow. Include a name 'Jane Doe' in Rich Black (#000000), PP Neue Montreal 500 weight, and a badge 'Collaborative' with white text on an 80px radius rgba(249, 250, 251, 0.4) background, 5.66px padding, PP Neue Montreal 400 weight.

### Type Scale

**role:** caption
**size:** 11
**lineHeight:** 1.33

**role:** body-sm
**size:** 14
**lineHeight:** 1.32

**role:** body
**size:** 16
**lineHeight:** 1.5

**role:** subheading
**size:** 20
**lineHeight:** 1.4

**role:** heading-sm
**size:** 24
**lineHeight:** 1.33

**role:** heading
**size:** 38
**lineHeight:** 1.25
**letterSpacing:** -0.48

**role:** heading-lg
**size:** 48
**lineHeight:** 1.1
**letterSpacing:** -0.91

**role:** display
**size:** 91
**lineHeight:** 0.9
**letterSpacing:** -1.73

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507873701-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507873701-thumb.jpg |
