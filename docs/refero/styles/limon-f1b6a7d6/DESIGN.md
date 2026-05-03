# Limón — Refero Style

- Refero URL: https://styles.refero.design/style/f1b6a7d6-1ecb-4f1c-95b0-e03323363999
- Site URL: https://limonoslo.no
- ID: f1b6a7d6-1ecb-4f1c-95b0-e03323363999
- Theme: dark
- Industry: ecommerce
- Created: 2026-04-30T02:47:04.459Z
- Ranks: newest: 293, popular: 701, trending: 545

> Earthy vibrancy

## Description

Limón projects a warm, vibrant aesthetic through contrasting earthy dark neutrals with a singular, vivid yellow accent. Typography, primarily a custom sans-serif, maintains a clean and approachable feel, while the use of subtle borders and minimal shadows keeps components lightweight. The design balances rich photographic visuals with ample whitespace, creating an inviting yet structured experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Forest | #1d0b0d | neutral | Primary text, navigation links, overlay backgrounds — grounds the palette with a rich, almost black earth tone |
| Fresh Lime | #103b15 | neutral | Secondary text, accent borders, decorative elements — provides a subtle, natural green contrast to the deep neutrals |
| Marigold Zest | #f7ea48 | accent | Primary action buttons, prominent headings, key highlights — a vivid, high-saturation yellow that commands attention and signifies interaction |
| Vanilla Cream | #fcf9f0 | neutral | Card backgrounds, section backgrounds, light text (on dark) — a warm off-white that acts as a canvas for most content |
| Soft Mist | #dbe2dc | neutral | Subtle borders, list item separators — a very light, cool gray that defines boundaries without visual weight |
| Pure White | #ffffff | neutral | Soft icon strokes, subtle dividers, and low-emphasis decorative details. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| VenusCom | Montserrat, Open Sans | 300, 400, 500, 600, 700 | 14px, 16px, 19px, 20px, 26px, 30px, 36px, 46px, 54px, 68px, 75px | 1.00, 1.01, 1.15, 1.20, 1.25, 1.30, 1.35, 1.37, 1.40, 1.45, 1.60 | Primary brand typeface for all text content; its range of weights supports both bold headings and readable body copy, providing consistency across the interface. |
| Times | serif | 400 | 19px | 1.01 | Decorative lists or specific content blocks where a classic, distinct serif feel is desired to break visual monotony. |
| Font Awesome 6 Brands | Font Awesome 6 Brands | 400 | 36px | 1.00 | Social media icons and brand-specific iconography, maintaining a consistent vector-based icon style. |
| Font Awesome 6 Free | Font Awesome 6 Free | 900 | 14px, 16px | 1.00 | General utility and interface icons, differentiated by a bolder weight and slightly increased letter-spacing for visual punch. |
| Helvetica | Arial, Helvetica Neue | 400 | 15px | 1.50 | Small functional text, legal disclaimers, or metadata where a highly legible, standard sans-serif is appropriate. |
| FreeSans | Arial, Sans-serif | 400 | 19px | 1.01 | Specific list items or decorative text requiring tighter tracking for a distinct visual effect, possibly for artistic or brand display needs. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.45 | 0.02 |
| body-sm | 16 | 1.4 | 0.03 |
| subheading | 20 | 1.35 |  |
| heading-sm | 26 | 1.3 |  |
| heading | 30 | 1.25 |  |
| heading-lg | 36 | 1.2 |  |
| display | 75 | 1 | 0.04 |

## Spacing & Shape

```json
{
  "radius": {
    "body": "1px",
    "other": "40px",
    "buttons": "1px"
  },
  "elementGap": "15px",
  "sectionGap": "30px",
  "cardPadding": "15px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call to action

Filled button with 'Marigold Zest' (#f7ea48) background, 'Fresh Lime' (#103b15) text, 1px border-radius, and 12px vertical / 34px horizontal padding.

### Ghost Action Button (Dark)

**Role:** Secondary action on dark backgrounds

Transparent background, 'Pure White' (#ffffff) text and a 1px solid 'Pure White' (#ffffff) border, 0px border-radius, 12px vertical / 34px horizontal padding (effective padding values after extraction are 0px, so this is likely a text-only button with hover states).

### Ghost Action Button (Light)

**Role:** Secondary action on light backgrounds

Transparent background, 'Deep Forest' (#1d0b0d) text, 0px border-radius, 12px vertical / 34px horizontal padding (effective padding values after extraction are 0px, so this is likely a text-only button with hover states).

### Icon Button

**Role:** Standalone decorative or functional icon

Transparent background, 'Fresh Lime' (#103b15) color, 0px border-radius, 0px padding. Uses Font Awesome 6 Free for icon content.

### Product Description Card

**Role:** Displaying individual product details

Background 'Vanilla Cream' (#fcf9f0), primary text 'Deep Forest' (#1d0b0d), secondary text 'Fresh Lime' (#103b15). Features 19px VenusCom for description text and a 1px border-radius. Images within these have a 40px radius.

### Navigation Link

**Role:** Primary navigation elements

Transparent background, 'Deep Forest' (#1d0b0d) text at 16px VenusCom weight 400. Horizontal padding 8px left/right, and a 6px margin-left for separation.

## Do's

- Prioritize 'Marigold Zest' (#f7ea48) for all primary calls to action, ensuring it is the sole vivid accent on pages predominantly using neutral tones.
- Use 'Deep Forest' (#1d0b0d) as the default background for immersive sections and main text color on light backgrounds like 'Vanilla Cream' (#fcf9f0).
- Employ 'Vanilla Cream' (#fcf9f0) for primary content surfaces and background panels, providing a warm, off-white canvas.
- Maintain a comfortable rhythm with '15px' as the standard element gap, extending to '30px' for section separation.
- Apply '1px' border-radius to interactive elements like buttons and body text containers, while using '40px' for imagery crops to introduce softness.
- Use VenusCom with varying weights for all headings and body text; reserve 'Times' and 'FreeSans' for specific decorative list elements if needed.
- Ensure textual elements adhere to the established line heights, particularly longer body text at 1.37 to 1.40 for readability.

## Don'ts

- Avoid introducing additional saturated colors beyond 'Marigold Zest' (#f7ea48) for interactive elements.
- Do not use dark text colors on 'Deep Forest' (#1d0b0d) backgrounds; default to 'Pure White' (#ffffff) or 'Vanilla Cream' (#fcf9f0) for contrast.
- Never deviate from the 1px border-radius for buttons and body containers, or 40px for images; these are signature brand attributes.
- Do not use letter-spacing values from Font Awesome or FreeSans on VenusCom body text or headings.
- Avoid dense UI layouts without sufficient '15px' element gaps or '30px' section gaps, as the design relies on comfortable negative space.
- Do not place 'Marigold Zest' (#f7ea48) text against a 'Vanilla Cream' (#fcf9f0) background; the low contrast will hinder legibility.
- Refrain from using 'Soft Mist' (#dbe2dc) as a background color for large sections; its primary role is for subtle dividers and borders.

## Layout

The layout follows a max-width contained page model for most content, with a centered alignment. The hero section is full-bleed, using a 'Deep Forest' (#1d0b0d) background with food photography and centered text (`Limón`, `See our menu`) often in 'Marigold Zest' (#f7ea48) or 'Pure White' (#ffffff). Section rhythm alternates between full-bleed imagery and content blocks with 'Vanilla Cream' (#fcf9f0) backgrounds. Content is organized into a flexible grid pattern, often featuring 3-column product cards with images above descriptive text and 'Order Now' ghost buttons. Vertical spacing is comfortable, with a '30px' section gap observed. The navigation is a fixed top bar with minimalist links.

## Imagery

The visual language predominantly features high-quality product photography: food items (bowls, wraps) are tightly cropped and displayed in a flat lay, top-down perspective on solid, muted backgrounds (often matching 'Deep Forest' or other earthy tones). Images are typically contained within a rectangular frame but some have a distinct 40px border-radius, giving them a softer edge. Photography serves both decorative and explanatory roles, showcasing the vibrancy of the food. Icons are minimal, using outlined or solid Font Awesome styles primarily for navigation and social links, maintaining a clean distinction from the rich food photography.

## Similar Brands

| Business | Why |
| --- | --- |
| Sweetgreen | Emphasizes fresh, vibrant food photography against simple backgrounds and uses a clean, modern sans-serif typography. |
| Chipotle | Focuses on high-quality food visuals, simple branding, and clear calls to action, without overly complex UI. |
| Pokeworks | Connects vibrant, healthy food imagery with a modern, fresh aesthetic and straightforward menu presentation. |
| Cava | Utilizes warm, earthy tones alongside a bright accent color for calls to action, emphasizing natural ingredients and a clean feel. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1d0b0d
background: #fcf9f0
border: #dbe2dc
accent: #f7ea48
primary action: #f7ea48 (filled action)

Example Component Prompts:
Create a hero section: 'Deep Forest' (#1d0b0d) full-bleed background. Centered headline 'Limón' VenusCom 75px weight 700 'Marigold Zest' (#f7ea48). Subheading 'See our menu' VenusCom 46px weight 400 'Pure White' (#ffffff). Button 'Order here' with background 'Marigold Zest' (#f7ea48), text 'Fresh Lime' (#103b15), 1px border-radius, 12px vertical / 34px horizontal padding.

Create a product card: 'Vanilla Cream' (#fcf9f0) background, 1px border-radius. Image with 40px border-radius. Product name VenusCom 26px weight 600 'Deep Forest' (#1d0b0d). Description VenusCom 19px weight 400 'Deep Forest' (#1d0b0d) with 15px top padding. Ghost 'Order Now' button below with text 'Fresh Lime' (#103b15).

Create a navigation bar: 'Vanilla Cream' (#fcf9f0) background. 'Limón' logo VenusCom 36px weight 700 'Deep Forest' (#1d0b0d). Navigation links 'Home', 'Menu' VenusCom 16px weight 400 'Deep Forest' (#1d0b0d) with 8px horizontal padding and 6px margin-left.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517198486-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517198486-thumb.jpg |
