# Aboard — Refero Style

- Refero URL: https://styles.refero.design/style/fabacd2a-acb6-46c4-939c-4a464df15440
- Site URL: https://aboardhr.com
- ID: fabacd2a-acb6-46c4-939c-4a464df15440
- Theme: light
- Industry: productivity
- Created: 2026-04-30T00:53:07.055Z
- Ranks: newest: 673, popular: 877, trending: 806

> Joyful pastel workspace

## Description

Aboard projects a playful, human-centered HR experience through its soft, pastel color palette and friendly, rounded interfaces. The system combines crisp, dark typography with a clean, light canvas, punctuated by cheerful accent colors and varied card backgrounds. Components are lightweight with generous padding and prominent border radii, creating an approachable and inviting visual environment. The overall design feels like a thoughtful, organized space that prioritizes user comfort and visual delight.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #fafafa | neutral | Page backgrounds, primary surface for cards and clean sections |
| Graphite Black | #000000 | neutral | Primary text, headline text, bold iconography, strong borders |
| Ink Gray | #262626 | neutral | Secondary text, subheadings, internal UI labels; Decorative background gradient used for dynamic visual interest, typically in hero sections or prominent feature blocks |
| Muted Ash | #757577 | neutral | Tertiary text, navigation links, decorative border lines |
| Light Shadow | #cdcdcd | neutral | Subtle border colors, divider lines, soft box shadows for elements |
| Sky Blue | #e0f2fe | accent | Background for secondary action buttons, subtle highlights |
| Cotton Candy Pink | #fbcfe8 | accent | Decorative card backgrounds, playful highlight sections |
| Misty Lavender | #e6dafd | accent | Decorative card backgrounds, soft thematic accents |
| Aquamarine Tint | #b6edee | accent | Decorative card backgrounds, refreshing soft highlights |
| Powder Blue | #afe4ff | accent | Decorative card backgrounds, light background accents |
| Buttercup Yellow | #ffe77a | accent | Decorative card backgrounds, bright accent blocks |
| Vivid Violet | #975aff | brand | Spot color for icons, specific text highlights, small decorative elements |
| Warm Orange | #ff6800 | brand | Spot color for icons, specific text highlights, small decorative elements |
| Bright Teal | #00babf | brand | Spot color for icons, specific text highlights, small decorative elements |
| Deep Blue | #008ae8 | brand | Blue outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| system-ui | Inter | 400, 500, 600 | 12px, 15px, 16px, 18px, 20px, 24px, 44px, 56px, 64px | 1.00, 1.10, 1.20, 1.30, 1.40, 1.50, 1.56, 1.60, 2.00 | All primary interface text, headings, body text, and links. The varied weights and precise letter-spacing create a clear, modern voice that feels simultaneously friendly and authoritative. |
| sans-serif | Roboto | 400 | 12px | 1.20 | Fallback for system-ui, used for general UI elements where specific styling is less critical, ensuring broad compatibility. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 | -0.12 |
| body-sm | 15 | 1.5 | -0.15 |
| subheading | 18 | 1.5 | -0.162 |
| heading-sm | 20 | 1.3 | -0.18 |
| heading | 24 | 1.4 | -0.24 |
| heading-lg | 44 | 1.1 | -0.44 |
| display | 56 | 1 | -0.56 |
| display-lg | 64 | 1 | -0.64 |

## Spacing & Shape

```json
{
  "radius": {
    "body": "2px",
    "cards": "24px",
    "small": "6px",
    "buttons": "99px",
    "general": "10px"
  },
  "elementGap": "10px",
  "sectionGap": "48px",
  "cardPadding": "32px",
  "pageMaxWidth": null
}
```

## Components

### Outline Pill Button

**Role:** Primary action, navigation items

Rounded pill-shaped button with a border of Deep Blue (#008ae8), transparent background, and Deep Blue (#008ae8) text. Padding: 10px vertical, 24px horizontal. Radius: 99px.

### Light Blue Pill Button

**Role:** Secondary action, call to action

Rounded pill-shaped button with a Sky Blue (#e0f2fe) background, Deep Blue (#008ae8) text. Padding: 10px vertical, 24px horizontal. Radius: 99px.

### Hero Section Card

**Role:** Content container, information display

Card with varied backgrounds like Cotton Candy Pink (#fbcfe8) or Misty Lavender (#e6dafd). Features a 24px border radius, with 40px padding on top, right, and left, and 0px padding at the bottom for content flow into the next section.

### Feature Card (Playful)

**Role:** Feature showcase, data visualization

Square card with a 24px border radius and generous 32px padding on all sides. Backgrounds include Buttercup Yellow (#ffe77a), Aquamarine Tint (#b6edee), or Powder Blue (#afe4ff), creating a vibrant, inviting visual. No box shadow.

## Do's

- Use Graphite Black (#000000) for all main headings and primary body text to maintain visual clarity and contrast.
- Apply a 99px border radius to all interactive buttons and tags to consistently convey an approachable, friendly aesthetic.
- Utilize Canvas White (#fafafa) as the dominant background for all main page content and primary cards.
- Incorporate the accent colors (Cotton Candy Pink, Misty Lavender, Aquamarine Tint, Powder Blue, Buttercup Yellow) primarily for distinct card backgrounds and decorative sections.
- Maintain a comfortable density with an element gap of 10px and card padding of 32px to ensure readability and spaciousness.
- Headers and page titles should use system-ui at appropriate sizes from the type scale with negative letter-spacing for a refined look.
- Use Deep Blue (#008ae8) exclusively for interactive link text and button borders to clearly signal interactivity.

## Don'ts

- Avoid using the accent pastel colors for text or borders; they are reserved for background washes and decorative surfaces.
- Do not introduce sharp corners or small radii (less than 24px) for cards or larger containers; consistency in rounded shapes is key.
- Refrain from using strong, dark shadows. The system relies on light-colored borders and background variations for element separation.
- Do not apply the Gradient Aura to small UI elements or text; it is intended for large, impactful background sections only.
- Avoid deviating from the defined system-ui and sans-serif fonts; no custom fonts should be introduced.
- Do not use generic gray tones for interactive elements; leverage Deep Blue (#008ae8) for all actionable states.
- Do not clutter layouts; prioritize comfortable spacing with 10px element gaps and 32px card padding.

## Similar Brands

| Business | Why |
| --- | --- |
| Braid | Shares a pastel, multi-color card background approach for features and content. |
| Rippling | Similar emphasis on a clean, light interface with concise data presentation and friendly typography, though Aboard is more colorful. |
| Notion | Uses generous whitespace and subtle UI elements to create a calm, focused digital workspace, albeit with a less chromatic palette than Aboard. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #fafafa
border: #cdcdcd
accent: #fbcfe8
primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section with a large centered headline using system-ui 64px weight 600, Graphite Black (#000000), letter-spacing -0.64px. Below it, a Light Blue Pill Button saying 'Book a demo'. The button has a Sky Blue (#e0f2fe) background, Deep Blue (#008ae8) text, and a 99px border-radius.
2. Design a feature card with a Buttercup Yellow (#ffe77a) background, 24px border radius, and 32px padding on all sides. Inside, include a heading (system-ui 24px weight 500, Ink Gray #262626) and a body paragraph (system-ui 16px weight 400, Ink Gray #262626).
3. Build a navigation bar using Canvas White (#fafafa) as background. Include the brand logo on the left. On the right, use Muted Ash (#757577) for navigation links (e.g., 'Product', 'Price'). The 'Sign In' button is an Outline Pill Button with Deep Blue (#008ae8) border and text, 99px radius.
4. Create a content section with a Cotton Candy Pink (#fbcfe8) background, 24px border radius, 40px top/right/left padding. Include a subheading (system-ui 44px weight 600, Graphite Black #000000, letter-spacing -0.44px) followed by a short body paragraph (system-ui 18px weight 400, Ink Gray #262626).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510344592-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510344592-thumb.jpg |
