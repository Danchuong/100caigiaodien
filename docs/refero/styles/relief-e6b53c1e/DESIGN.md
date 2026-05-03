# Relief — Refero Style

- Refero URL: https://styles.refero.design/style/e6b53c1e-644b-4300-b42f-0e64905d1443
- Site URL: https://www.relief.app
- ID: e6b53c1e-644b-4300-b42f-0e64905d1443
- Theme: light
- Industry: fintech
- Created: 2026-04-30T03:29:50.772Z
- Ranks: newest: 138, popular: 804, trending: 678

> Oceanic clarity on a paper white canvas. Illustrations and confident blues guide the user through a clear, calm financial journey.

## Description

Relief's visual system evokes a refreshing, confident simplicity, utilizing a primarily cool blue and white palette. Illustrations are front-and-center, creating a friendly and approachable feel rather than an austere financial one. Typography is robust and direct, anchored by strong, rounded buttons that feel tangible and reassuring. The design favors soft elevation and ample whitespace, framing content with a playful organic rather than rigid geometric structure.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Sky Canvas | #f9f7f0 | neutral | Page background; a soft, warm off-white that creates a friendly and inviting base |
| Arctic Mist | #ffffff | neutral | Card backgrounds, elevated container surfaces, primary text for some inverted sections |
| Deep Ocean | #13426f | brand | Primary heading text, dark section backgrounds, link borders and some dark card surfaces |
| Hope Blue | #2e96ff | brand | Primary call-to-action button fills, key interactive elements, subtle accent in some headings |
| Subtle Gray | #616c8a | neutral | Body text, secondary information, and soft borders |
| Slate Text | #333333 | neutral | General body text, default text color for cards and other content blocks |
| Input Charcoal | #202634 | neutral | Input field text, typically darker for clear readability |
| Powder Blue | #bde1f9 | semantic | Informational badges and subtle background accents, creating a soft blue highlight |
| Cerulean Link | #0254a5 | accent | Interactive link text and their hover states, subtly darker than Hope Blue for contrast |
| Shadow Tint | #cde7fb | neutral | The base color for button shadows, ensuring they appear as soft blue rather than harsh gray |
| Sky Fill | #73b9ff | accent | Decorative illustration fills, adding lighter blue elements without functional interaction |
| Ocean Fill | #50a7ff | accent | Decorative illustration fills, providing a mid-toned blue accent |
| Accent Blue | #328dd1 | accent | Decorative elements, particularly in illustrations and review card timestamps, indicating secondary information or visual interest |
| Dim Gray | #d0d5dd | neutral | Subtle borders and dividers, indicating soft visual separation |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Gilroy | system-ui | 400, 500, 600, 700, 800 | 12px, 14px, 16px, 18px, 20px, 32px, 40px, 49px, 53px, 58px | 0.94, 1.00, 1.10, 1.11, 1.20, 1.29, 1.38, 1.40, 1.43, 1.50, 1.60, 1.63, 1.67, 1.70 | Primary brand typeface, used across all headings, body text, and UI components. Its slightly soft, humanist sans-serif quality adds approachability and friendliness. Consistent negative letter-spacing contributes to its compact, confident presentation. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.7 | -0.22 |
| body-sm | 14 | 1.63 | -0.25 |
| body | 16 | 1.6 | -0.29 |
| subheading | 18 | 1.5 | -0.32 |
| heading-sm | 20 | 1.43 | -0.36 |
| heading | 32 | 1.29 | -0.58 |
| heading-lg | 40 | 1.2 | -0.72 |
| display | 58 | 1.11 | -1.04 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "18px",
    "badges": "100px",
    "buttons": "70px",
    "hero-elements": "49px"
  },
  "elementGap": "14px",
  "sectionGap": "68px",
  "cardPadding": "28px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call-to-action button

Solid 'Hope Blue' fill with 'Arctic Mist' text and 'Shadow Tint' soft blue shadow, featuring a highly rounded '70px' border-radius. Padding is generous `14px 28px` to give ample tap area and visual weight.

### Compact Action Button

**Role:** Secondary call-to-action button

A variant of the primary action, using 'Hope Blue' fill and 'Arctic Mist' text. Features a '42px' border-radius for slightly less extreme rounding, and `0px 24px` padding, suggesting a more compact or secondary role without the prominent vertical padding.

### Dark Feature Card

**Role:** Informational display card

A card with 'Deep Ocean' background, '18px' border-radius, and generous `28px` padding. Used for features or content blocks that require a distinct, darker background to stand out.

### Review Testimonial Card

**Role:** User testimonial display

Cards for displaying user reviews, set against 'Arctic Mist' with '26px' border-radius. Features a subtle `rgba(0, 0, 0, 0.05) 0px 3px 0px 0px` box shadow, giving a slight lift without being overly heavy. Padding is `34px 30px 24px 30px`.

### Input Field

**Role:** User data entry

Input fields have an 'Arctic Mist' background with 'Input Charcoal' text, with a `32px` left padding. There's no visible border-radius or border color, implying a minimalist aesthetic where the field itself is visually integrated into the background.

### Pill Badge

**Role:** Categorization or status indicator

Uses 'Powder Blue' as a background color with 'Slate Text' for content, and a '100px' border-radius to create a full pill shape. Vertical padding is `10.5px` and horizontal is `21px`, indicating a small, rounded tag.

## Do's

- Prioritize 'Hope Blue' (#2e96ff) for all primary interactive elements like call-to-action buttons, maintaining a '70px' border-radius for their rounded pill shape.
- Use 'Gilroy' font throughout, applying the detected negative letter-spacing for each specific `typeScale` role to maintain a compact and confident appearance.
- Employ 'Deep Ocean' (#13426f) for primary headings and dark content sections, contrasted with 'Sky Canvas' (#f9f7f0) or 'Arctic Mist' (#ffffff) for backgrounds.
- Apply '18px' border-radius to general information cards and `26px` for testimonial cards, providing a consistent soft-edged aesthetic.
- Maintain a clear visual hierarchy by limiting prominent shadows to interactive elements and specific cards (e.g., `rgba(0, 0, 0, 0.05) 0px 3px 0px 0px` for review cards).
- Use 'Sky Canvas' (#f9f7f0) as the underlying page background, with 'Arctic Mist' (#ffffff) for most interactive card surfaces, ensuring a bright and open feel.

## Don'ts

- Avoid harsh, dark shadows; instead, use the subtle 'Shadow Tint' (#cde7fb) for button elevation to keep the visual tone light and approachable.
- Do not introduce new saturated accent colors outside of the blues and grays; the color palette is intentionally focused for brand consistency.
- Refrain from using sharp corners; all UI elements from buttons to cards should have a generous border-radius, typically `18px`, `26px`, `70px`, or `100px`.
- Do not deviate from the 'Gilroy' typeface or adjust its letter-spacing outside the defined `typeScale` roles, as its specific tracking is a key brand identifier.
- Avoid dense, information-heavy blocks; ensure generous `28px` card padding and `14px` element gaps to maintain a spacious and airy layout.
- Do not use dark backgrounds for general body text or utility elements; save 'Deep Ocean' for prominent headings or distinct sections.

## Layout

The page primarily uses a max-width contained layout, with content centered. The hero section features a soft 'Sky Canvas' background with a large, centered headline and button, anchored by significant illustrations across the bottom. Sections maintain a consistent vertical rhythm, often alternating between white and blue backgrounds in bands. Content frequently follows a text-left/image-right or image-left/text-right pattern, or stacked centered elements. Feature sections often employ 3-column card grids. There is a strong emphasis on spaciousness, with ample vertical and horizontal padding, creating a comfortable density. Navigation is a simple top bar, with a logo on the left and a 'Primary Action Button' on the far right.

## Imagery

Imagery primarily utilizes custom conceptual illustrations and product screenshots. Illustrations are dimensional and playful, featuring organic, rounded forms in blues, grays, and occasional pops of warm orange or yellow. They often show symbolic objects (money, boats, anchors, piggy banks) within scenes that evoke financial journey narratives, heavily using the brand's blue palette. Product screenshots are typically presented within mockups of mobile devices. Icons are filled, rounded, and mono-color, complementing the illustration style. Imagery plays a dual role: setting a decorative, approachable atmosphere and serving as explanatory content, often adjacent to text blocks. It is image-heavy, balancing UI with illustrative storytelling.

## Elevation

| Element | Style |
| --- | --- |
| Primary Action Button | rgba(154, 207, 246, 0.5) 0px 7px 0px 0px |
| Secondary Action Button | rgba(154, 207, 246, 0.5) 0px 5px 0px 0px |
| Review Testimonial Card | rgba(0, 0, 0, 0.05) 0px 3px 0px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Wealthfront | Clean, light UI with strong photography and clear, confident calls-to-action, avoiding visual clutter. |
| Chime | Approachable financial app design using blues and whites, friendly illustrations, and clear path to action. |
| Mint | Financial management with an emphasis on clarity, soft UI elements, and a user-friendly, non-intimidating aesthetic. |
| SoFi | Modern fintech feel with a focus on simple, clean layouts and a strong brand color, often using illustrations to convey concepts. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #333333
background: #f9f7f0
border: #d0d5dd
accent: #2e96ff
primary action: #2e96ff (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #2e96ff background, #40444e text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a 'Dark Feature Card': 'Deep Ocean' background, 18px radius, 28px padding. Headline 'Link your debt' at 20px Gilroy weight 700, #ffffff, letter-spacing -0.36px. Body text 'Discover savings...' at 16px Gilroy weight 400, #ffffff, letter-spacing -0.29px. Include a central illustration.
3. Build a 'Review Testimonial Card': 'Arctic Mist' background, 26px radius, rgba(0, 0, 0, 0.05) 0px 3px 0px 0px shadow. Padding 34px 30px 24px 30px. Body text 'I've already seen improvements...' at 16px Gilroy weight 400, #333333, letter-spacing -0.29px. Author name 'JazzyJ367' at 14px Gilroy weight 700, #333333, letter-spacing -0.25px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519767641-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519767641-thumb.jpg |
