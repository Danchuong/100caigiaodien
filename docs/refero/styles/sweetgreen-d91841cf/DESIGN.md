# sweetgreen — Refero Style

- Refero URL: https://styles.refero.design/style/d91841cf-c717-43ef-97a2-400778fa6e1a
- Site URL: https://www.sweetgreen.com
- ID: d91841cf-c717-43ef-97a2-400778fa6e1a
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T00:42:37.563Z
- Ranks: newest: 722, popular: 471, trending: 330

> Farmer's market clarity

## Description

Sweetgreen cultivates a fresh, approachable aesthetic with a primary focus on ingredient transparency and natural vitality. Its visual language balances an organic, handcrafted feel with clean, modern utility. A vibrant, almost neon green-yellow acts as a spirited accent against an otherwise muted, earthy palette of desaturated greens and soft off-whites, echoing fresh produce against natural backdrops. Typography is friendly yet confident, pairing a distinct, light-weight display face for headlines with a clean sans-serif for body text. Components are light, favoring generous organic radii and subtle elevation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Fresh Sprout | #e6ff55 | brand | Primary action backgrounds, vibrant highlights, badges — a burst of natural energy |
| Garden Patch | #00473c | brand | Primary text for actions, interactive elements, and certain headings; provides deep contrast |
| Soil Shadow | #0e150e | neutral | Primary text, deep shadows, essential borders, and subtle dark backgrounds for footer elements |
| Field Cream | #f4f3e7 | neutral | Canvas background, prominent surface accents, and muted text elements |
| Willow Mist | #d8e5d6 | neutral | Secondary surface backgrounds, card backgrounds — a soft, desaturated green base |
| Grain Sand | #e8dcc6 | neutral | Tertiary surface backgrounds, warmer card backgrounds |
| Stone Grey | #8c8c82 | neutral | Muted text, ghost button borders and text |
| Charcoal Haze | #9fa19f | neutral | Subtle shadow color, creating a soft, warm elevation under cards |
| Pitch Black | #000000 | neutral | Decorative lines, strict borders, icon fills, and ultra-high contrast text where absolute legibility is required |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| SweetSansText | Inter | 400, 700 | 12px, 14px, 16px, 18px, 20px, 24px | 1.00, 1.20, 1.25, 1.33, 1.38, 2.21, 2.64 | A versatile workhorse for body text, navigation, and smaller headings. The slightly wider tracking for smaller sizes maintains legibility and an open, friendly feel. |
| SweetSans \| Grenette | Montserrat | 200, 400 | 40px, 70px, 80px | 0.85, 1.00 | Display headlines and hero text. The extra-light 'Grenette' at 200 weight with tighter tracking creates an ephemeral, almost whispered presence, making the large headlines feel refined rather than imposing. |
| SweetSansText-Regular |  | 400 | 12px, 14px | 1.29, 1.33 | SweetSansText-Regular — detected in extracted data but not described by AI |
| Grenette |  | 200 | 48px | 1 | Grenette — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body-sm | 14 | 1.29 | 0.17 |
| body | 16 | 1.25 |  |
| subheading | 18 | 1.33 |  |
| heading-sm | 20 | 1.25 |  |
| heading | 24 | 1 |  |
| heading-lg | 40 | 0.85 |  |
| display | 70 | 0.85 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "24px",
    "links": "4px",
    "badges": "20px",
    "images": "20px",
    "inputs": "8px",
    "buttons": "1000px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "24px",
  "pageMaxWidth": "1440px"
}
```

## Components

### Primary Action Button

**Role:** Main call-to-action button for initiating key processes.

Filled with Fresh Sprout (#e6ff55) background, Garden Patch (#00473c) text, and a highly rounded 1000px border-radius. Padding is generous at 15px top, 60px right, 13px bottom, 60px left.

### Ghost Link Button

**Role:** Secondary action or navigation link within content.

Transparent background, Stone Grey (#8c8c82) text and 1px border, with 4px border-radius. No explicit padding, relying on natural text spacing.

### Navigation Action Button

**Role:** Compact primary action within navigation bars.

Filled with Garden Patch (#00473c) background, Fresh Sprout (#e6ff55) text, and a 1000px border-radius. Padding is tighter at 7px top, 16px right, 5px bottom, 16px left.

### Product Card

**Role:** Display for individual menu items or feature blocks.

Uses Willow Mist (#d8e5d6) or Grain Sand (#e8dcc6) as background. Has a 24px border-radius and a subtle shadow: rgba(14, 21, 14, 0.4) 3px 3px 32px -10px. Internal padding is 24px all around for content.

### Interactive Input Field

**Role:** Used for user data entry in forms.

Transparent background, Soil Shadow (#0e150e) 1px border, with an 8px border-radius. Text color is Soil Shadow (#0e150e). Padding is 12px top/bottom, 16px left, and 50px right to accommodate visual elements.

### Accent Badge

**Role:** Highlights key attributes or status.

Filled with Fresh Sprout (#e6ff55) background, Pitch Black (#000000) text, and 20px border-radius. Padding is 3px top, 20px right, 0px bottom, 20px left.

## Do's

- Always use Fresh Sprout (#e6ff55) exclusively for primary action backgrounds and brand highlights to maintain its energetic impact.
- Apply the 1000px border-radius token for all primary and navigation filled buttons to achieve a distinct pill shape.
- Prioritize text legibility by pairing Soil Shadow (#0e150e) or Garden Patch (#00473c) on Field Cream (#f4f3e7) or Willow Mist (#d8e5d6) backgrounds.
- Utilize 'Grenette' font at weight 200 for large display headlines to convey authority through subtlety and restraint.
- Maintain a clear visual hierarchy with generous vertical spacing, using the sectionGap of '40px' between major content blocks.
- Introduce card elevation sparingly using the rgba(14, 21, 14, 0.4) 3px 3px 32px -10px shadow for interactive elements or featured content.
- Employ the 24px border-radius for cards and content containers to soften their edges and contribute an organic feel.

## Don'ts

- Do not use Fresh Sprout (#e6ff55) for general text or borders, as it dulls its impact as an accent.
- Avoid solid, sharp-edged rectangles for interactive elements; opt for rounded corners, especially 20px for badges and 1000px for buttons.
- Do not use 'SweetSansText' for large, impactful headlines; reserve the distinctive 'Grenette' for hero text and primary titles.
- Refrain from heavy, dark background sections unless explicitly for a footer or dedicated dark mode component.
- Avoid using multiple chromatic colors together; let Fresh Sprout be the primary splash of color.
- Do not introduce complex drop shadows or hard outlines; elements should feel light and naturally elevated or integrated.
- Never use excessive or inconsistent letter-spacing; adhere to the specified tracking for each font style and size.

## Layout

The page uses a maximum content width of 1440px, centered on the screen. The hero section is full-width with a visual-dominant background, featuring a large, centered headline and a prominent primary action button. Content sections often alternate between soft, muted background colors (Willow Mist, Grain Sand, Field Cream) and utilize a two-column layout with text and imagery side-by-side or stacked. A flexible grid displays product cards, typically in a three-column arrangement. Navigation is a persistent top bar with essential links and a 'Order' button, providing quick access and brand consistency.

## Imagery

Photography features vibrant, high-key close-ups of food and fresh ingredients, often arranged in bowls or on light-colored rustic surfaces. The treatment focuses on natural light and rich, true-to-life colors, with minimal styling beyond presentation. Product shots are typically isolated or minimally contextualized to emphasize the raw elements. Small, functional icons are filled, with a medium stroke weight where outlines exist, often in Pitch Black (achromatic). Imagery serves primarily to showcase the product irresistibly, acting as explanatory content and appetite stimulant.

## Elevation

| Element | Style |
| --- | --- |
| Product Card | rgba(14, 21, 14, 0.4) 3px 3px 32px -10px |
| Interactive Button | rgba(14, 21, 14, 0.4) 3px 3px 32px -10px |

## Similar Brands

| Business | Why |
| --- | --- |
| Chipotle | Shares a focus on fresh ingredients with high-quality food photography and a clean, natural color palette. |
| Erewhon Market | Employs an elevated, health-conscious aesthetic with premium presentation and a focus on natural, often muted, visual backdrops with bright food colors. |
| Trader Joe's | Combines a friendly, approachable brand voice with an emphasis on natural product presentation, avoiding overly processed or artificial visuals. |
| Whole Foods Market | Utilizes a clean, organized visual system that highlights fresh produce and natural foods, often featuring environmental imagery. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #0e150e
background: #f4f3e7
border: #0e150e
accent: #e6ff55
primary action: #e6ff55 (filled action)

### 3-5 Example Component Prompts
1. Create a Primary Action Button: #e6ff55 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a product listing card: Willow Mist (#d8e5d6) background, 24px border-radius, shadow rgba(14, 21, 14, 0.4) 3px 3px 32px -10px, 24px padding. Title 'Spicy Thai Salad' using 'SweetSansText' font, weight 700, size 24px, lineHeight 1.0, Soil Shadow (#0e150e) color. Body text 'Fresh greens with a kick.' using 'SweetSansText' font, weight 400, size 16px, lineHeight 1.25, Soil Shadow (#0e150e) color.
3. Create a navigation bar: Field Cream (#f4f3e7) background. Left aligned link 'Our Menu' using 'SweetSansText' font, weight 400, size 16px, lineHeight 1.25, Soil Shadow (#0e150e) color. Right aligned small Navigation Action Button 'Order' and then another link like 'Locations'.
4. Create an input field: transparent background, Soil Shadow (#0e150e) 1px border, 8px border-radius. Placeholder text 'Enter your email' in Stone Grey (#8c8c82), actual text input in Soil Shadow (#0e150e), padding 12px top/bottom, 16px left, 50px right.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509736562-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509736562-thumb.jpg |
