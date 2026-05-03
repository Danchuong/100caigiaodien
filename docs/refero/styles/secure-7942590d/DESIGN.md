# Secure — Refero Style

- Refero URL: https://styles.refero.design/style/7942590d-b11b-4cfb-8fe8-945b3867d865
- Site URL: https://whereby.com
- ID: 7942590d-b11b-4cfb-8fe8-945b3867d865
- Theme: light
- Industry: productivity
- Created: 2026-04-12T12:21:23.000Z
- Ranks: newest: 927, popular: 631, trending: 1230

> Soft rose + sharp violet — professional warmth.

## Description

Whereby blends a soft, friendly aesthetic with crisp, serious typography to create a sense of approachable professionalism. The subtle use of a pale rose background with deep violet accents softens the otherwise monochrome core, making video conferencing feel less sterile. Strategic pops of teal introduce vitality, particularly in areas signaling integration or positive outcomes, while overall structure relies on clean whites and grays, punctuated by precise typographic heirarchy, maintaining an efficient and trustworthy impression.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Graphite | #000000 | neutral | Primary text, critical UI elements, strong contrasts against light backgrounds. |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, primary content areas. |
| Whisper Gray | #f4f4f4 | neutral | Subtle section dividers, secondary backgrounds, slight elevation. |
| Porcelain Gray | #cccccc | neutral | Disabled button states, subtle borders. |
| Blush Rose | #f8dbd5 | brand | Hero section background, adds a distinctive warm, soft touch to key promotional areas. |
| Whereby Violet | #2b189b | brand | Primary call-to-action buttons, interactive elements, prominent headings — the main brand accent color. |
| Deep Plum | #211375 | brand | Link states, secondary interactive elements, text elements requiring strong emphasis against lighter backgrounds. |
| Integrate Teal | #006654 | accent | Highlighting beneficial features, success indicators, elements related to ecosystem integration. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | Inter | 400, 500, 600 | 14px, 16px, 18px | 1.50 | Body text, navigation items, secondary labels, used at 14px for fine print, 16px for body, 18px for larger body lead ins. Its slight letter-spacing reduction helps fit more content without feeling dense. |
| Inter | Inter | 400, 500, 600 | 12px, 16px, 18px | 1.0, 1.5 | Used for smaller emphasized text like navigation links and component labels, and specific content points. It provides a touch more presence than 400 weight. |
| Inter | Inter | 400, 500, 600 | 14px | 1.50 | For strong emphasis in body copy or smaller headings, offering clear hierarchy without resorting to bolding entire paragraphs. |
| Whereby Roslindale Text Regular | Playfair Display | 400 | 18px, 24px, 28px | 1.25 | Subheadings and section titles. This custom serif font adds a touch of classic sophistication, differentiating major content blocks from the modern sans-serif body. |
| Whereby Roslindale Display Condensed Regular | Playfair Display | 400 | 40px, 48px, 80px, 120px | 1.15, 1.25 | Primary display headlines. The condensed nature paired with a moderate 400 weight prevents it from feeling overpowering, allowing large text to be impactful yet elegant. The extreme negative letterSpacing at larger sizes is a distinctive brand choice requiring careful implementation. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1 | 0 |
| body-sm | 14 | 1.5 | -0.448 |
| body | 16 | 1.5 | -0.448 |
| subheading | 18 | 1.25 | 0 |
| heading-sm | 24 | 1.25 | 0 |
| heading | 28 | 1.25 | 0 |
| heading-lg | 40 | 1.15 | -40 |
| display | 48 | 1.15 | -48 |
| display-lg | 80 | 1.15 | -80 |
| display-xl | 120 | 1.25 | -120 |

## Spacing & Shape

```json
{
  "radius": {
    "misc": "20px",
    "cards": "12px",
    "buttons": "40px",
    "default": "12px"
  },
  "elementGap": "8-24px",
  "sectionGap": "64px",
  "cardPadding": "24-40px",
  "pageMaxWidth": null
}
```

## Components

### Button Group — Primary & Secondary CTAs



### Feature Cards — For individuals and For product builders



### Telehealth Highlight Card — Use Case Showcase



### Secondary Call-to-Action Button - Outlined

**Role:** Secondary action button (Log in)

Transparent background with a 1px border in 'Whereby Violet' (#2b189b) and 'Whereby Violet' text. 40px border-radius maintains the pill shape. Padding matches primary action buttons.

### Navigation Link

**Role:** Top navigation menu items

Default state uses 'Midnight Graphite' (#000000) for text with Inter 400 at 16px. No explicit backgrounds or borders, relying on spacing for separation. Hover/active states might introduce subtle underlining or color changes.

### Hero Section Content Block

**Role:** Information display

Content block within the hero section, background `Blush Rose` (#f8dbd5). Contains large headings (Whereby Roslindale Display Condensed Regular 80px), body text (Inter 18px), and a primary CTA button. No explicit border, relies on section background for visual grouping.

### Feature Card

**Role:** Detailed feature description

Card with a `Canvas White` background, 12px border radius, containing an image/video frame, a 'Whereby Roslindale Text Regular' heading (24px), Inter body text (18px), and a 'Whereby Violet' CTA button (pill-shaped, 40px radius). Uses 24px-40px padding.

### Highlight Section Container

**Role:** Section for emphasized content

Uses 'Whisper Gray' (#f4f4f4) as a background to subtly differentiate from the main 'Canvas White' sections. Typically contains a centered stack of elements, like a carousel or a specific product feature showcase, with padding of 64px vertical.

## Do's

- Use 'Whereby Violet' (#2b189b) exclusively for primary interactive elements, ensuring strong call-to-action visibility.
- Apply a 40px border-radius for all buttons, creating a consistent pill-shaped aesthetic.
- Employ 'Blush Rose' (#f8dbd5) sparingly for hero sections or key promotional areas to maintain its distinctive warm impact.
- Utilize 'Whereby Roslindale Display Condensed Regular' (400 weight) for all key headlines, implementing the negative letter-spacing for large text.
- Maintain a clear visual hierarchy by contrasting 'Whereby Roslindale Text Regular' 400 for subheadings with 'Inter' for body text.
- Ensure generous vertical spacing of 64px between major sections to provide visual breathing room.
- Use 'Integrate Teal' (#006654) only for indicators of success, integration points, or positive attributes.

## Don'ts

- Do not use highly saturated colors for backgrounds; reserve them for interactive elements or small accents.
- Avoid mixing 'Blush Rose' (#f8dbd5) with other chromatic background colors; it should stand as a distinct accent.
- Do not use pixel-perfect letter spacing if a font family has specified `em` values, use those for fidelity.
- Do not introduce additional sans-serif fonts; stick to the Inter family for all body and UI text.
- Avoid using border-radius values other than 12px, 20px, or 40px, unless for specific small form elements (4px).
- Do not apply drop shadows to elements; depth is primarily achieved through background color changes (e.g., 'Whisper Gray').
- Do not add additional visual ornamentation or gradients; the design relies on clean surfaces and strong typography.

## Layout

The layout primarily follows a max-width centered container model, though the hero section often uses a full-bleed background. The hero features a two-column split, with a large, condensed serif headline and text on the left, balanced by an image on the right, all against a 'Blush Rose' background. Subsequent sections often alternate between 'Canvas White' and 'Whisper Gray' backgrounds, maintaining a strong vertical rhythm with generous padding (64px). Content typically uses either a single-column stacked approach for text blocks or a two-column layout with text and image alternating sides. Feature sections frequently employ an adaptive grid for card-like elements. Navigation is a sticky top bar with brand logo, primary links, and distinct 'Log in' (outlined) and 'Sign up' (filled) buttons.

## Imagery

The site's imagery features professional, mid-shot photography showing individuals engaged in focused work on laptops in bright, airy home or office settings. Images are often contained within softly rounded masks (12px-20px radius). There are also clean, product-focused screenshots of the video conferencing interface itself, framed as if on a desktop or mobile device. Icons are simple, filled, and largely monochrome or in 'Integrate Teal', serving an explanatory and illustrative role rather than purely decorative. Overall, visual density is moderate; imagery serves to illustrate or provide social proof, rather than completely dominate sections. The treatment is naturalistic with a slightly warm filter often present, matching the 'Blush Rose' accent.

## Similar Brands

| Business | Why |
| --- | --- |
| Slack | Uses monochrome base with a single vibrant brand color for CTA and key elements, similar to Whereby's 'Whereby Violet' focus. |
| Figma | Employs clean, spacious layouts with a focus on functional typography and limited use of vibrant accents on interactive elements, much like Whereby's systematic use of color. |
| Notion | Combines a system sans-serif for utility (Inter's role) with a distinct display serif for brand and impact, echoing Whereby's Inter + Roslindale typography pairing. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #000000
- Background: #ffffff
- CTA: #2b189b
- Border: #2b189b (for outlined buttons), #cccccc (for disabled)
- Accent: #006654

### 3-5 Example Component Prompts
1. **Create a Hero Section:** Full-width background: #f8dbd5. Left column: headline 'Whereby Roslindale Display Condensed Regular' 80px, weight 400, #000000, letter-spacing -80px; body text 'Inter' 18px, weight 400, #000000, line-height 1.5. Below body text, a button: 'Whereby Violet' (#2b189b) background, 'Canvas White' (#ffffff) text, 40px border-radius, 16px vertical padding, 40px horizontal padding.
2. **Generate a Feature Card:** Background: #ffffff, 12px border-radius. Headline 'Whereby Roslindale Text Regular' 24px, weight 400, #000000. Body text 'Inter' 16px, weight 400, #000000, line-height 1.5. Internal padding 40px. Include an image slot within the card, with a 12px border-radius.
3. **Design a Navigation Bar Button (Log in):** Text 'Log in', color #2b189b ('Whereby Violet'), 'Inter' 16px, weight 500. Transparent background, 1px border in #2b189b. Border-radius 40px. Padding 10px vertical, 24px horizontal.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775933560058-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775933560058-thumb.jpg |
