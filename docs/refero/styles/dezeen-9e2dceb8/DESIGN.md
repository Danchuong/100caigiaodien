# Dezeen — Refero Style

- Refero URL: https://styles.refero.design/style/9e2dceb8-0c87-45db-8830-9df961b02b32
- Site URL: https://dezeen.com
- ID: 9e2dceb8-0c87-45db-8830-9df961b02b32
- Theme: light
- Industry: media
- Created: 2026-02-27T13:43:44.000Z
- Ranks: newest: 1116, popular: 619, trending: 1196

> Architectural Blueprint on Crisp White. This metaphor evokes the precision and clarity of architectural drawings and the pristine nature of a fresh page.

## Description

The Dezeen design system presents an editorial aesthetic, blending classic serif typography with a modern sans-serif for a distinctive voice. Dominant black text on bright white surfaces creates crisp readability, while the signature 'Indigo Accent' (#556e9b) injects a cool, authoritative hue across key interactive elements and titles. The layout emphasizes content separation and clear hierarchy, utilizing subtle borders and generous vertical spacing to frame articles and navigation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Pitch Black | #000000 | neutral | Primary text, core UI elements, bold borders — forms the backbone of the typographic hierarchy and defines structure. |
| Pure White | #ffffff | neutral | Page backgrounds, card surfaces, input fields — provides expansive canvas for content and ensures high contrast. |
| Fog Gray | #f0f0f0 | neutral | Subtle background for UI sections, list backgrounds — offers a soft visual break from pure white without introducing chromatic noise. |
| Silver Ash | #d8d8d8 | neutral | Secondary backgrounds, subtle borders, inactive link states — provides subdued contrast for secondary content. |
| Concrete Gray | #757575 | neutral | Subtle text, secondary links — used for less prominent textual information, such as timestamps or meta-information. |
| Soft Stone | #eaeaea | neutral | Navigation backgrounds, dividers — a slightly darker off-white for structural elements. |
| Indigo Accent | #556e9b | brand | Key headings, interactive links, active navigation, subtle button borders — establishes brand identity and guides user attention. |
| Sunset Orange | #ff7617 | accent | Accent for certain links, potentially call-to-action highlights — adds a vibrant, warm contrast. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| StandardCT | Open Sans, Montserrat | 700 | 19px, 27px, 40px | 0.95, 1.00, 1.10, 1.20, 1.25, 1.37, 1.38 | Display and primary headings. The bold, all-caps presentation at larger sizes commands attention, while the specific font-feature-settings ensure stylistic consistency with the brand's custom type, providing a strong, editorial presence. |
| Chronicle Text G1 A | Georgia, Merriweather | 400, 700 | 14px, 16px | 1.23, 1.25, 1.29, 1.50 | Body copy, article content, secondary headings, and general UI text. This serif font provides a classic, readable foundation for lengthy editorial content, distinguishing it from the sans-serif headings. |
| Arial | Helvetica Neue | 400, 700 | 13px, 14px, 16px | 1.00, 1.20, 1.29 | System fallback for UI elements, labels, and minor interactive components where a clean, straightforward sans-serif is required. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.29 |  |
| body-lg | 16 | 1.25 |  |
| subheading | 19 | 1.38 |  |
| heading | 27 | 1.2 |  |
| display | 40 | 1.1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "inputs": "0px",
    "buttons": "0px",
    "accentCircular": "100%"
  },
  "elementGap": "9px",
  "sectionGap": "48px",
  "cardPadding": "0px",
  "pageMaxWidth": "1212px"
}
```

## Components

### Newsletter Signup Modal



### Article Card List



### Most Commented Sidebar Block



### Circular Play Button

**Role:** Interaction

Small, circular button with a black background (#000000) and an 'Indigo Accent' (#556e9b) border and text. Fully rounded (borderRadius: 50%) with no padding specified, implying a contained icon. This button is used for media playback, distinguished by its unique circular shape against a predominantly angular UI.

### Underlined Text Button

**Role:** Navigation/Action

Transparent background (rgba(0,0,0,0)) with 'Pitch Black' (#000000) text and border color. No border-radius. Minimal vertical padding (1px top/bottom, 6px sides). Used for text-based actions or links within content, maintaining a subtle presence.

### Circular Highlight Button

**Role:** Accent/Icon

Small, circular button with 'Silver Ash' (#dddddd) background and 'Pure White' (#ffffff) text. Fully rounded (borderRadius: 100%) with 5px padding on all sides. Used for prominent, small interactive elements or icons.

### Article Card

**Role:** Content Display

Transparent background with no border-radius or box-shadow, relying on text and image content for definition. No padding, implying content extends to edges. Used for displaying articles in lists or grids, maintaining a clean, unadorned presentation.

### Newsletter Input Field

**Role:** Form Input

Pure White (#ffffff) background with 'Pitch Black' (#000000) text and border. No border-radius, presenting a sharp, functional appearance. Features 0px top/bottom padding and 5px horizontal padding. Used for email subscription forms.

## Do's

- Use 'Pitch Black' (#000000) for all primary body text and 'Pure White' (#ffffff) for all main backgrounds to ensure high contrast and readability.
- Apply 'Indigo Accent' (#556e9b) exclusively to key interactive elements like links, active navigation items, and prominent headings to guide user focus.
- Reserve the 'Circular Play Button' style for media controls, emphasizing its unique shape against the otherwise angular design.
- Maintain 0px border-radius for all cards and input fields to uphold the sharp, architectural aesthetic.
- Utilize 'Chronicle Text G1 A' for all long-form editorial content at 14px or 16px with appropriate line heights (1.23-1.50) for optimal legibility.
- Employ 'StandardCT' (weight 700) for all main headings and titles, leveraging its strong editorial presence.
- Ensure generous vertical spacing, typically in multiples of 9px or 11px, between content blocks to create a comfortable density and clear content hierarchy.

## Don'ts

- Do not use shadow for card elevation; rely on clear borders or background color shifts where visible.
- Avoid decorative rounded corners on any elements other than specific circular buttons, as it contradicts the sharp, precise aesthetic.
- Do not introduce new chromatic colors unless explicitly defined as an accent; the palette is tightly controlled.
- Never use 'Arial' for main headings or body text; reserve it for minor UI elements or as a system fallback.
- Do not use excessive letter-spacing; all specified fonts use 'normal' letter-spacing to maintain typographic integrity.

## Layout

The page maintains a centered max-width of 1212px for its core content, providing a contained reading experience. The hero section often presents a split layout, with a prominent image juxtaposed against a large headline. Content sections follow a vertical rhythm, with consistent spacing of 9px to 11px between elements and an implied 48px between major sections. Articles typically arrange text and images in alternating left-right or stacked configurations. Navigation consists of a sticky top bar with a search utility and prominent category links, supplemented by a left sidebar for 'Highlights' and 'Most Popular' sections creating a multi-column editorial structure. The layout prioritizes clear content separation and readability.

## Imagery

This site prominently features photography within article cards and hero sections, often displayed full-bleed within its content blocks (0px padding, no radius). The photography style is varied, encompassing product shots, architectural exteriors and interiors, and landscape vistas, but generally leans towards high-quality, professional imagery that serves to illustrate content more than set a specific mood. Photos are contained, not overlapping, and appear without masks or special treatments. Density is moderate, balancing visual interest with text-dominant article layouts. Icons are minimal, typically monochrome, and integrated subtly for navigation or interaction.

## Elevation

| Element | Style |
| --- | --- |
| Highlight Heading Borders | rgba(101, 122, 183, 0.6) 10px 0px 0px 0px, rgba(101, 122, 183, 0.6) -10px 0px 0px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| ArchDaily | Both are architectural editorial sites with a focus on clean, content-first layouts and sophisticated typography. |
| Wallpaper* | Shares a high-contrast, editorial aesthetic with strong typographic hierarchy and a refined visual language. |
| The New York Times | Employs a similar classic serif font for body text paired with a strong sans-serif for headlines, creating a timeless editorial feel. |
| Monocle | Known for a structured, content-rich layout that blends clean typography with carefully curated imagery, similar to Dezeen's approach. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #000000
- Background: #ffffff
- CTA: #556e9b
- Border: #000000 (primary), #556e9b (accent)
- Accent: #ff7617

### 3-5 Example Component Prompts
1. Create a primary headline: Text 'Milan design week must-sees', font 'StandardCT', weight 700, size 40px, lineHeight 1.1, color #000000, fontFeatureSettings '"calt" 0, "kern", "liga" 0'.
2. Design an article body paragraph: Text 'London studio about DSDHA prioritises "elegant frugality" in Henry Moore Studios gallery revamp', font 'Chronicle Text G1 A', weight 400, size 16px, lineHeight 1.25, color #000000.
3. Make an interactive text link: Text 'Highlights', font 'Chronicle Text G1 A', weight 400, size 14px, color #556e9b, with a subtle 1px #556e9b border on hover.
4. Build a newsletter input field: 'Pure White' (#ffffff) background, 'Pitch Black' (#000000) text and 1px border. No border-radius. Padding 0px top/bottom, 5px left/right. Placeholder text 'Email' in #000000 color.
5. Assemble an Article Card: Transparent background, no border-radius. Contains an image at the top (no corner radius), followed by a 'subheading' in 'StandardCT' and a 'body' text in 'Chronicle Text G1 A'. No internal padding for the card container.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924771352-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924771352-thumb.jpg |
